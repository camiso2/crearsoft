<!-- The Modal -->
<div class="modal" id="videos">
    <div class="modal-dialog modal-lg" style="background-color: transparent; border:0">
        <div class="modal-content">
            <!-- Modal Header -->

            <!-- Modal body -->
            <div class="modal-body" style="background-color: transparent; border:0">
                <div class="ratio ratio-16x9">
                    <iframe id="src_video" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>
                    </iframe>
                </div>


                <div class="container">
                <div class="section-heading" style="margin-top:15px">
                    <h2>Proyecto <em id="title"></em><br><span class="technologies-modal" id="technologies" style="width: 98%;white-space: nowrap;text-overflow: ellipsis;overflow: hidden;"></span></h2>
                    <br>

                    <p id="description-project"></p>
                    <a rel="nofollow" href="/cv/jaiver.pdf" target="_blank"><button class="btn btn-success"
                            style="font-size: 22px; font-weight:800;border:0;margin-top:20px"><i
                                class="fa fa-file-pdf-o"></i>&nbsp;&nbsp;Descargar CV </button></a>
             
                    
                </div>
                </div>

            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" id='close_modal'> <i class="fa fa-close"></i>&nbsp;&nbsp;
                    CERRAR</button>
            </div>

            <script>
                $('#close_modal').click(function() {
                    $("#videos").modal('hide');
                    $('body').removeClass('modal-open');
                    $('.modal-backdrop').remove();
                    $("#src_video").attr('src', '');
                });
            </script>


        </div>
    </div>
</div>


{{--  
<!-- The Modal -->
<div class="modal" id="videos">
    <div class="modal-dialog modal-lg" style="background-color: transparent; border:0">
        <div class="modal-content"  >
            <!-- Modal Header -->
          
            <!-- Modal body -->
            <div class="modal-body" style="background-color: transparent; border:0">
                <div class="ratio ratio-16x9">
                    <iframe id="vid_you"
                        src="https://www.youtube.com/embed/TnAQxC8_tPo?rel=1&amp;controls=1&amp;showinfo=0&amp;start=1&autoplay=1&enablejsapi=1"
                        frameborder="0" allow="autoplay; encrypted-media" allowfullscreen class="embed-responsive-item">
                    </iframe>
                </div>

                <p
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" id='close_modal'> <i class="fa fa-close"></i>&nbsp;&nbsp;
                    CERRAR</button>
            </div>
            <script>
                //create the script for the API and append it to the DOM
                var tag = document.createElement('script');
                tag.src = 'https://www.youtube.com/iframe_api';
                var firstScriptTag = document.getElementsByTagName('script')[0];
                firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

                var player;

                function onYouTubeIframeAPIReady() {
                    player = new YT.Player('vid_you', {
                        events: {
                            'onReady': onPlayerReady
                        }
                    });
                }

                function onPlayerReady(event) {
                    document.getElementById('close_modal').addEventListener('click', function() {
                        player.pauseVideo();
                        $("#videos").modal('hide'); //ocultamos el modal
                        $('body').removeClass('modal-open'); //eliminamos la clase del body para poder hacer scroll
                        $('.modal-backdrop').remove(); //eliminamos el backdrop del modal
                    })
                }
            </script>

        </div>
    </div>
</div>
--}}
