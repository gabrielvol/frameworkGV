<?php /* // REF [32] */ ?>


<?php /* Blockquote ---------------------------------------------------------
The <blockquote> HTML element indicates that the enclosed text is an extended quotation. Usually, this is rendered visually by indentation. A URL for the source of the quotation may be given using the cite attribute, while a text representation of the source can be given using the <cite> element.

The <figure> HTML element represents self-contained content, potentially with an optional caption, which is specified using the <figcaption> element. The figure, its caption, and its contents are referenced as a single unit.
*/ ?>
        
<blockquote cite="httpswwwsitiowebcom">
    <p>A URL that designates a source document or message for the information quoted. This attribute is intended to point to information explaining the context or the reference for the quote.</p>
    <p>This attribute is intended to point to information explaining the context or the reference for the quote.</p>  
    <footer>
        <div class="">
            <img src="<?php echo $dir_env; ?>/img/avatar_01.jpg" alt="" />
        </div>
        <div class="">
            <p>NombreApellido, <span>Puesto, Empresa</span></p>
        </div>
</blockquote>

<figure>
    <blockquote cite="httpswwwhuxleynetfourhtml">
        <p>Words can be like X-rays, if you use them properly—they’ll go through anything. You read and you’re pierced.</p>
    </blockquote>
    <figcaption>&mdash; Aldous Huxley, <cite>Brave New World</cite></figcaption>
</figure>



<?php /* Inline Quotation element -------------------------------------------
The <q> HTML element indicates that the enclosed text is a short inline quotation. Most modern browsers implement this by surrounding the text in quotation marks. This element is intended for short quotations that don't require paragraph breaks; for long quotations use the <blockquote> element.
*/ ?>

<p>When Dave asks HAL to open the pod bay door, HAL answers: <q cite="httpswwwimdbcomtitlett0062622quotesqt0396921">I'm sorry, Dave. I'm afraid I can't do that.</q></p>