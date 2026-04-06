<?php
/**
 * Returns a local asset URL with a filemtime-based cache-busting query param.
 *
 * - Local paths only (e.g. '/css/app.css')
 * - Protocol-relative and absolute web URLs are returned unchanged
 * - file:// URLs and unsafe local paths are rejected
 * - Missing files return the original path without version
 *
 * @param string $path
 * @param string $dir_env
 * @param bool   $warn
 * @return string
 */

function asset_versioned(string $path, string $dir_env = '', bool $warn = false): string
{
    $inputPath = trim($path);

    if ($inputPath === '') {
        error_log('asset_versioned: empty path received');

        if ($warn) {
            trigger_error('asset_versioned() received an empty path', E_USER_WARNING);
        }

        return '';
    }

    $inputParts = parse_url($inputPath);

    // External URLs are intentionally returned as-is.
    $isProtocolRelative = strncmp($inputPath, '//', 2) === 0;
    $scheme = strtolower((string) (($inputParts !== false ? ($inputParts['scheme'] ?? '') : '')));
    $externalSchemes = ['http', 'https', 'ftp', 'ftps', 'ws', 'wss', 'data', 'mailto', 'tel'];
    $isAbsoluteUrl = in_array($scheme, $externalSchemes, true);
    $isFileScheme = $scheme === 'file';

    if ($isFileScheme) {
        error_log('asset_versioned: file:// URL is not allowed. path=' . $inputPath);

        if ($warn) {
            trigger_error('asset_versioned() received disallowed file:// URL: ' . $inputPath, E_USER_WARNING);
        }

        return '';
    }

    if ($isProtocolRelative || $isAbsoluteUrl) {
        if ($warn) {
            error_log('asset_versioned: passing through non-local URL. path=' . $inputPath);
            trigger_error('asset_versioned() received non-local URL: ' . $inputPath, E_USER_WARNING);
        }

        return $inputPath;
    }

    $rawPath = '/' . ltrim($inputPath, '/');
    $parts = parse_url($rawPath);

    if ($parts === false) {
        $normalizedPath = $rawPath;
        $queryString = '';
        $fragment = '';
    } else {
        $normalizedPath = '/' . ltrim($parts['path'] ?? $rawPath, '/');
        $queryString = $parts['query'] ?? '';
        $fragment = $parts['fragment'] ?? '';
    }

    // Reject local paths that attempt traversal or use filesystem-style separators.
    if (preg_match('#(^|/)\.\.?(/|$)#', $normalizedPath) === 1 || strpos($normalizedPath, '\\') !== false) {
        error_log('asset_versioned: rejected unsafe local path. path=' . $inputPath);

        if ($warn) {
            trigger_error('asset_versioned() received unsafe local path: ' . $inputPath, E_USER_WARNING);
        }

        return '';
    }

    $querySuffix = $queryString === '' ? '' : '?' . $queryString;
    $fragmentSuffix = $fragment === '' ? '' : '#' . $fragment;

    $trimmedDirEnv = trim($dir_env, '/');
    $normalizedDirEnv = $trimmedDirEnv === '' ? '' : '/' . $trimmedDirEnv;

    $documentRoot = rtrim($_SERVER['DOCUMENT_ROOT'] ?? '', '/\\');
    $pathAlreadyHasEnvPrefix = false;

    if ($normalizedDirEnv !== '') {
        $envPrefixWithSlash = $normalizedDirEnv . '/';
        $pathAlreadyHasEnvPrefix = $normalizedPath === $normalizedDirEnv
            || strncmp($normalizedPath, $envPrefixWithSlash, strlen($envPrefixWithSlash)) === 0;
    }

    if ($pathAlreadyHasEnvPrefix && $warn) {
        error_log('asset_versioned: input path already includes dir_env prefix. path=' . $normalizedPath . ' dir_env=' . $normalizedDirEnv);
        trigger_error('asset_versioned() path already includes dir_env prefix: ' . $normalizedPath, E_USER_WARNING);
    }

    $effectivePath = $pathAlreadyHasEnvPrefix
        ? $normalizedPath
        : $normalizedDirEnv . $normalizedPath;

    $publicPath = $effectivePath . $querySuffix . $fragmentSuffix;

    if ($documentRoot === '') {
        error_log('asset_versioned: DOCUMENT_ROOT is not set. path=' . $publicPath);

        if ($warn) {
            trigger_error('DOCUMENT_ROOT is not set in asset_versioned()', E_USER_WARNING);
        }

        return $publicPath;
    }

    $fullPath = $documentRoot . $effectivePath;

    if (!is_file($fullPath)) {
        error_log('asset_versioned: missing asset file. fullPath=' . $fullPath . ' publicPath=' . $publicPath);

        if ($warn) {
            trigger_error('Missing asset for asset_versioned(): ' . $fullPath, E_USER_WARNING);
        }

        return $publicPath;
    }

    $mtime = filemtime($fullPath);

    if ($mtime === false) {
        error_log('asset_versioned: filemtime failed. fullPath=' . $fullPath . ' publicPath=' . $publicPath);
        return $publicPath;
    }

    $versionedQuery = $queryString === ''
        ? 'v=' . $mtime
        : $queryString . '&v=' . $mtime;

    return $effectivePath . '?' . $versionedQuery . $fragmentSuffix;
}
?>
