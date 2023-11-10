<ul class="red-soc">
    <li>
        <a href="https://www.youtube.com/channel/UCDUPTHrEBJ3e9ZpW_qyDodA" target="_blank"  style="--icon:#e83028;">
            <i class="fa-brands fa-youtube"></i>
            <i class="fa-brands fa-youtube"></i>
        </a>
    </li>
    <li>
        <a href="https://www.linkedin.com/in/jaiver-ocampo-96496695" target="_blank"  style="--icon:#00abf0;">
            <i class="fa-brands fa-linkedin"></i>
            <i class="fa-brands fa-linkedin"></i>
        </a>
    </li>
    <li>
        <a href="https://github.com/camiso2" target="_blank"  style="--icon:#333333;">
            <i class="fa-brands fa-github"></i>
            <i class="fa-brands fa-github"></i>
        </a>
    </li>
    <li>
        <a href="https://es.stackoverflow.com/users/68218/jaiver-andres-ocampo-oviedo"target="_blank"  style="--icon:#3b5998;">
            <i class="fa-brands fa-stack-overflow"></i>
            <i class="fa-brands fa-stack-overflow"></i>
        </a>
    </li>
    <li>
        <a target="_blank" onclick="send_whatsapp()"  style="--icon:#25D366;">
            <i class="fa-brands fa-whatsapp"></i>
            <i class="fa-brands fa-whatsapp"></i>
        </a>
    </li>
</ul>

<script>
    function send_whatsapp() {
        var dir = 'https://wa.me/57'+{{ env('TEL') }}+'?text='+'Quiero conocer mas...'.toString();
        window.open(dir, '_blank');
    }
</script>
