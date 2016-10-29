<?php
    $snippets = 1;
    $int = 1;
    $navSelected= 0;
    $title = "Video html5 | GV";
    $mdesc = "";
    include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/head.inc.php');
?>
<link rel="stylesheet" href="/nuevo/_snippets/css/mediaelementplayer.css" />
<script type="text/javascript" src="/nuevo/_snippets/js/mediaelement-and-player.min.js"></script>
</head>
<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/header.inc.php'); ?>    
    <div id="main" class="container" role="main">
        <video width="320" height="240" poster="/nuevo/video/poster.jpg" controls preload="none">
            <!-- MP4 for Safari, IE9, iPhone, iPad, Android, and Windows Phone 7 -->
            <source src="/video/index.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"' />
            <!-- WebM/VP8 for Firefox4, Opera, and Chrome -->
            <source src="/nuevo/video/video.webm" type='video/webm; codecs="vp8, vorbis"' />
            <!-- Ogg/Vorbis for older Firefox and Opera versions -->
            <source src="/video/index.ogv" type='video/ogg; codecs="theora, vorbis"'/>
            <!-- Optional: Add subtitles for each language -->
            <track kind="subtitles" src="/nuevo/video/subs.srt" srclang="en" />
            <!-- Optional: Add chapters -->
            <track kind="chapters" src="/nuevo/video/chapters.srt" srclang="en" />
            <!-- Flash fallback for non-HTML5 browsers without JavaScript -->
            <object width="320" height="240" type="application/x-shockwave-flash" data="/nuevo/video/video.swf">
                <param name="movie" value="/nuevo/video/video.swf" />
                <param name="flashvars" value="controls=true&file=video.mp4" />
                <!-- Image as a last resort -->
                <img src="/nuevo/video/poster.jpg" width="320" height="240" title="No video playback capabilities" />
            </object>
        </video>
    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/nuevo/common/footer.inc.php'); ?>
        <script type="text/javascript">
            /* video tag */
            $('video').mediaelementplayer({
                // if the <video width> is not specified, this is the default
                defaultVideoWidth: 480,
                // if the <video height> is not specified, this is the default
                defaultVideoHeight: 270,
                // if set, overrides <video width>
                videoWidth: -1,
                // if set, overrides <video height>
                videoHeight: -1,
                // width of audio player
                audioWidth: 400,
                // height of audio player
                audioHeight: 30,
                // initial volume when the player starts
                startVolume: 0.8,
                // useful for <audio> player loops
                loop: false,
                // enables Flash and Silverlight to resize to content size
                enableAutosize: true,
                // the order of controls you want on the control bar (and other plugins below)
                features: ['playpause','progress','current','duration','tracks','volume','fullscreen'],
                // Hide controls when playing and mouse is not over the video
                alwaysShowControls: false,
                // force iPad's native controls
                iPadUseNativeControls: false,
                // force iPhone's native controls
                iPhoneUseNativeControls: false,
                // force Android's native controls
                AndroidUseNativeControls: false,
                // forces the hour marker (##:00:00)
                alwaysShowHours: false,
                // show framecount in timecode (##:00:00:00)
                showTimecodeFrameCount: false,
                // used when showTimecodeFrameCount is set to true
                framesPerSecond: 25,
                // turns keyboard support on and off for this instance
                enableKeyboard: true,
                // when this player starts, it will pause other players
                pauseOtherPlayers: true,
                // array of keyboard commands
                keyActions: []
            });
    </script>
</body>
</html>