  






  
<form class="form-horizontal" action="" method="POST">
    <div class="form-group">
        <div class="col-lg-2 control-label" for="inputEmail"> Başlık </div>
        <div class="col-lg-12">
            <input  type="text" class="form-control" name="baslik" value="<?php echo $row->video_baslik ?>">
        </div>
    </div>


    <div class="form-group">
        <div class="col-lg-2 control-label" for="inputEmail"> Video Sahibi </div>
        <div class="col-lg-12">
            <input  type="text" class="form-control" name="sahip" value="<?php echo $row->video_sahibi ?>">
        </div>
    </div>

    <div class="form-group">
        <div class="col-lg-2 control-label" for="inputEmail"> Video Resim</div>
        <div class="col-lg-12">
            <input  type="text" class="form-control" name="resim" value="<?php echo $row->video_resim ?>">
        </div>
    </div>

    <div class="form-group">
        <div class="col-lg-2 control-label" for="inputEmail"> Video URL </div>
        <div class="col-lg-12">
            <input  type="text" class="form-control" name="videourl" value="<?php echo $row->video_url ?>">
        </div>
    </div>

    <div class="form-group">
        <div class="col-lg-2 control-label" for="inputEmail"> Video Açıklama </div>
        <div class="col-lg-12">
           <textarea  rows="10" class="form-control" name="aciklama"><?php echo $row->video_aciklama;?></textarea>
       </div>
   </div>



   <div class="form-group">
    <div class="col-lg-2 control-label" for="inputEmail"> Etiketler </div>
    <div class="col-lg-12">
     <input  type="text" class="form-control" name="etiket" value="<?php echo $row->video_etiketler ?>">
 </div>
</div>


<div class="form-group">
    <div class="col-lg-2 control-label" for="inputEmail"> Video Durumu</div>
    <div class="col-lg-12">
        <select name="durum" class="form-control">
            <?php
            if ($row->video_durum==1){
                echo '<option value="1" selected>Onaylı  </option>  
                <option value="2">Onay Bekliyor  </option>';
            }else{
                echo '<option value="1">Onaylı  </option>  
                <option value="2" selected>Onay Bekliyor  </option>';

            }
            ?>

        </select>

    </div>
</div>

<div class="form-group">
    <div class="col-lg-2 control-label" for="inputEmail"> Öne Çıkarılma</div>
    <div class="col-lg-12">
        <select name="tavsiye" class="form-control">
            <?php
            if ($row->video_tavsiye==1){
                echo '<option value="1" selected>Öne Çıkarılmış  </option>  
                <option value="2">Normal  </option>';
            }else{
                echo '<option value="1"> Öne Çıkarılmış  </option>  
                <option value="2" selected> Normal  </option>';

            }
            ?>

        </select>
