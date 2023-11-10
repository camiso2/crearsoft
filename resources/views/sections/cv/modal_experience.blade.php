<!-- The Modal -->
<div class="modal" id="experience">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title"> <b>Experto Profesional En IT</b> </h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="col-lg-12">
                    <div class="second-bar progress-skill-bar">
                        @foreach ($technologies as $technology)
                        <?php $porcent_color = "#5cb85c";?>
                        @if (intval($technology['porcent'])>70)
                        <?php $porcent_color = "#42a7d6";?>
                        @elseif (intval($technology['porcent'])<70 and intval($technology['porcent'])<=50 )
                        <?php $porcent_color = "#f0ad4e";?>
                            
                        @endif
                            <br>
                            <h4 class="text-exp"><span class="experience-mod" style="background-color: {{ $porcent_color  }}">{{ $technology['experience'] }}</span>  <span class="tecn-tecn">{{ $technology['technology'] }}</span> </h4>
                            <div class="progress">
                                <div class="progress-bar progress-bar-info" role="progressbar" style="width:{{ $technology['porcent'] }}%; background-color: {{ $porcent_color  }}">
                                    <span class="porc-progress" style="margin-left: {{ strval(intval($technology['porcent'] - 8)) }}%; color: {{ $porcent_color  }}";">{{ $technology['porcent'] . '%' }}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">  <i class="fa fa-close"></i>&nbsp;&nbsp; CERRAR</button>
            </div>

        </div>
    </div>
</div>
