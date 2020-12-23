<!-- Button trigger modal -->

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
    <i class="far fa-2x fa-plus-square"></i>
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Redes de <?php echo $nombre ?></h5> <!-- Resolver problema de llamado del campo Nombre -->
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button> -->
    </div>
    <div class="modal-body">
        <h5>Whatsapp</h5>
        <p>
            <a href="https://api.whatsapp.com/send?phone=<?php echo $whatsapp ?>" target="_blank" class="tooltip-test" title="Tooltip">
                <?php echo $whatsapp ?>
            </a>
        </p>
        <hr>
        <h5>Instagram</h5>
        <p>
            <a href="https://www.instagram.com/<?php echo $instagram ?>" target="_blank" class="tooltip-test" title="Tooltip">
                @<?php echo $instagram ?>
            </a>
        </p>
        <hr>
        <h5>e-mail</h5>
        <p>
            <a href="mailto:<?php echo $email ?>" class="tooltip-test" title="Tooltip">
                <?php echo $email ?>
            </a>
        </p>
        <hr>
        <h5>Sitio Web</h5>
        <p>
            <a href="https://<?php echo $website ?>" target="_blank" class="tooltip-test" title="Tooltip">
                www.<?php echo $website ?>
            </a>
        </p>
    </div>    
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </div>
    </div>
</div>
</div>
