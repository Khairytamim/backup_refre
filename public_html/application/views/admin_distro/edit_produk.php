          <?php foreach($produk->result() as $row){ ?>
          <div class="col s12 l9">
               <div class="card-panel lighten-2 title-panel">
                 <h5><i class="material-icons">shopping_basket<sup>settings</sup></i><br>Edit Produk</h5>
               </div>
               
               <div class="card-panel lighten-2">
                    <h5>Gambar Produk</h5>
                    <p>Masukkan gambar produk minimal satu foto. Gunakan 5 foto terbaik untuk gambar produk Anda.</p>
                    <div class="row">
                        <div class="col s4 l2">
                             <form  id="produk1" action="<?php echo base_url();?>AdminDistro/gambar_produk_upload_edit/<?php echo $row->id_produk;?>/1" class="dropzone"  >
                             <div class="dz-message" data-dz-message><span><div style="background-image:url('http://seveid.com/assets/gambar_kaos/xsmall/1/<?php echo $row->id_produk;?>.jpg'); width:55px; height:50px; background-size:cover; background-position:center;"></div></span></div>
                             </form>
                        </div>
                        <div class="col s4 l2">
                             <form  id="produk2" action="<?php echo base_url();?>AdminDistro/gambar_produk_upload_edit/<?php echo $row->id_produk;?>/2" class="dropzone"  >
                             <div class="dz-message" data-dz-message><span><div style="background-image:url('http://seveid.com/assets/gambar_kaos/xsmall/2/<?php echo $row->id_produk;?>.jpg'); width:55px; height:50px; background-size:cover; background-position:center;"></div></span></div>
                             </form>
                        </div>
                        <div class="col s4 l2">
                             <form  id="produk3" action="<?php echo base_url();?>AdminDistro/gambar_produk_upload_edit/<?php echo $row->id_produk;?>/3" class="dropzone"  >
                             <div class="dz-message" data-dz-message><span><div style="background-image:url('http://seveid.com/assets/gambar_kaos/xsmall/3/<?php echo $row->id_produk;?>.jpg'); width:55px; height:50px; background-size:cover; background-position:center;"></div></span></div>
                             </form>
                        </div>
                        <div class="col s4 l2">
                             <form  id="produk4" action="<?php echo base_url();?>AdminDistro/gambar_produk_upload_edit/<?php echo $row->id_produk;?>/4" class="dropzone"  >
                             <div class="dz-message" data-dz-message><span><div style="background-image:url('http://seveid.com/assets/gambar_kaos/xsmall/4/<?php echo $row->id_produk;?>.jpg'); width:55px; height:50px; background-size:cover; background-position:center;"></div></span></div>
                             </form>
                        </div>
                        <div class="col s4 l2">
                             <form  id="produk5" action="<?php echo base_url();?>AdminDistro/gambar_produk_upload_edit/<?php echo $row->id_produk;?>/5" class="dropzone"  >
                             <div class="dz-message" data-dz-message><span><div style="background-image:url('http://seveid.com/assets/gambar_kaos/xsmall/5/<?php echo $row->id_produk;?>.jpg'); width:55px; height:50px; background-size:cover; background-position:center;"></div></span></div>
                             </form>
                        </div>
                        <div class="col s4 l2">
                             <form  id="produk6" action="<?php echo base_url();?>AdminDistro/gambar_produk_upload_edit/<?php echo $row->id_produk;?>/6" class="dropzone"  >
                             <div class="dz-message" data-dz-message><span><div style="background-image:url('http://seveid.com/assets/gambar_kaos/xsmall/6/<?php echo $row->id_produk;?>.jpg'); width:55px; height:50px; background-size:cover; background-position:center;"></div></span></div>
                             </form>
                        </div>
                    </div>
               </div>
               <div class="card-panel lighten-2">
                    <h5>Detail Produk</h5>
                    <form action="<?php echo base_url();?>AdminDistro/simpan_produk_submit/<?php echo $row->id_produk;?>" method="post">
                    <input name="id_produk" type="hidden" value="<?php echo $row->id_produk;?>"> 
                         <div class="row">
                         	<div class="input-field col s12 l6">
                                   <input name="nama_produk" id="nama_produk" type="text" class="validate" value="<?php echo $row->nama_produk;?>" required>
                                   <label for="nama_produk">Nama Produk</label>
                              </div>
                              <div class="input-field col s6 l3">
                                   <input name="harga" id="harga" type="number" class="validate" value="<?php echo $row->harga;?>" required>
                                   <label for="harga">Harga (IDR)</label>
                              </div>
                              <div class="input-field col s6 l3">
                                   <input name="discount" id="discount" type="number" class="validate" value="<?php echo $row->diskon;?>" required>
                                   <label for="dicount">Discount (%)</label>
                              </div>
                         </div>
                         <div class="row">
                          	<div class="input-field col s12 l6">
                                   <input name="brand" id="brand" type="text" class="validate" value="<?php echo $row->brand;?>" required>
                                   <label for="brand">Brand</label>
                              </div>
                              <div class="input-field col s12 l6">
                                   <input name="id_brand" id="id_brand" type="text" class="validate" value="<?php echo $row->id_brand;?>" required>
                                   <label for="id_produk">ID Brand</label>
                              </div>
                         </div>
                         <div class="row">
                           <div class="input-field col s12 l3">
				    <select name="gender" required>
				       	      <option value="" disabled selected>Choose Gender</option>
					      <option <?php if($row->gender==1) echo "selected";?> value="1">Men</option>
					      <option <?php if($row->gender==2) echo "selected";?> value="2">Women</option>
					      <option <?php if($row->gender==3) echo "selected";?> value="3">Unisex</option>
				    </select>
				  </div>
                             <div class="input-field col s12 l5">
                            <select name="personality" required="required">
                                <option value="" disabled selected>Choose Personality</option>
                                  <?php foreach ($personality->result() as $r){?>
                                <option value="<?php echo $r->id_namaper;?>"><?php echo $r->nama_personality;?></option>
                                <?php } ?>
                            </select>
                            <input type="hidden" name="idpersona" value="" />
                               
                          </div> 
                             
                               <div class="input-field col s12 l4">
                                   <input name="berat" id="berat" type="number" class="validate" value="<?php echo $row->berat;?>" required>
                                   <label for="berat">Berat (GRAM)</label>
                              </div>
                         </div>
                        
                         	
                         <div class="row">
                              <div class="input-field col s12">
                                   <textarea name="deskripsi_produk" id="deskripsi_produk" class="materialize-textarea"><?php echo $row->deskripsi_produk;?></textarea>
                                   <label for="deskripsi_produk">Deskripsi Produk</label>
                              </div>
                         </div>
                       	 <div class="row">		 

			 	<?php if($type==0){?>
	<div class="input-field col s12" >
		<h5>Detail Ukuran</h5>
		<p>Inputkan ukuran dalam ukuran (cm)</p>
		<div class="row">
                	<div class="input-field col s12">
                        	<textarea name="ukuran" id="ukuran" class="materialize-textarea" required><?php echo $item[1];?></textarea>
                                   <label for="ukuran">Deskripsi Ukuran</label>
                              </div>
                         </div>
	</div>
	
<?php }else if($type==1){?>
	<div class="input-field col s12" >
		<h5>Detail Ukuran</h5>
		<p>Inputkan ukuran dalam ukuran (cm)</p>
	
	<table class="centered" style="margin-top:40px">
        <thead>
          <tr>
              <th></th>
              <th>XS</th>
              <th>S</th>
              <th>M</th>
              <th>L</th>
              <th>XL</th>
              <th>XXL</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td style="text-align:left; padding-right:30px"><b>CHEST</b></td>
            <?php for($i=1; $i<=6; $i++){?>
            <td><input name="c<?php echo $i;?>" type="number" min="0" step="0.1" value="<?php echo $item1[$i];?>" required></td>
            <?php }?>
          </tr>
          <tr>
            <td style="text-align:left; padding-right:30px"><b>LENGTH</b></td>
            <?php for($i=1; $i<=6; $i++){?>
            <td><input name="l<?php echo $i;?>" type="number" min="0" step="0.1" value="<?php echo $item2[$i];?>"  required></td>
            <?php }?>
          </tr>
          <tr>
            <td style="text-align:left; padding-right:30px"><b>SHOULDER WIDTH</b></td>
            <?php for($i=1; $i<=6; $i++){?>
            <td><input name="s<?php echo $i;?>" type="number" min="0" step="0.1"  value="<?php echo $item3[$i];?>" required></td>
            <?php }?>
          </tr>
        </tbody>
      </table>
      </div>

<?php }else if($type==2){ ?>
	<div class="input-field col s12">
		<h5>Detail Ukuran</h5>
		<p>Inputkan ukuran dalam ukuran (cm)</p>
	
	<table class="centered" style="margin-top:40px">
        <thead>
          <tr>
              <th></th>
              <th>36</th>
              <th>37</th>
              <th>38</th>
              <th>39</th>
              <th>40</th>
              <th>41</th>
              <th>42</th>
              <th>43</th>
              <th>44</th>
              <th>45</th>
              <th>46</th>
              <th>47</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td style="text-align:left; padding-right:30px"><b>LENGTH</b></td>
            <?php for($i=36; $i<=47; $i++){?>
            <td><input name="u<?php echo $i;?>" type="number" min="0" step="0.1" value="<?php echo $item1[$i];?>" required></td>
            <?php }?>
          </tr>
          
        </tbody>
      </table>
      
 </div>
<?php } else if($type==3){ ?>
	<div class="input-field col s12">
		<h5>Detail Ukuran</h5>
		<p>Inputkan ukuran dalam ukuran (cm)</p>
	
	<table class="centered" style="margin-top:40px">
        <thead>
          <tr>
              <th></th>
              <th>27</th>
              <th>28</th>
              <th>29</th>
              <th>30</th>
              <th>31</th>
              <th>32</th>
              <th>33</th>
              <th>34</th>
              <th>35</th>
              <th>36</th>
              <th>37</th>
              <th>38</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td style="text-align:left; padding-right:30px"><b>INSEAM</b></td>
            <?php for($i=27; $i<=38; $i++){?>
            <td><input name="i<?php echo $i;?>" type="number" min="0" step="0.1" value="<?php echo $item1[$i];?>" required></td>
            <?php }?>
          </tr>
          <tr>
            <td style="text-align:left; padding-right:30px"><b>WAIST</b></td>
            <?php for($i=27; $i<=38; $i++){?>
            <td><input name="w<?php echo $i;?>" type="number" min="0" step="0.1" value="<?php echo $item2[$i];?>" required></td>
            <?php }?>
          </tr>
          <tr>
            <td style="text-align:left; padding-right:30px"><b>HIP</b></td>
            <?php for($i=27; $i<=38; $i++){?>
            <td><input name="h<?php echo $i;?>" type="number" min="0" step="0.1" value="<?php echo $item3[$i];?>" required></td>
            <?php }?>
          </tr>
          <tr>
            <td style="text-align:left; padding-right:30px"><b>THIGH</b></td>
             <?php for($i=27; $i<=38; $i++){?>
            <td><input name="t<?php echo $i;?>" type="number" min="0" step="0.1" value="<?php echo $item4[$i];?>" required></td>
            <?php }?>
          </tr>
        </tbody>
      </table>
     </div>
<?php }?>
                         </div>
                         
                         <div class="row">
                              <div class="col s12">
                                   <button type="submit" class="waves-effect waves-light btn grey darken-1" style="width:100%; margin-top:20px;">Simpan</button>
                              </div>
                             
                         </div>
                    </form>
               </div>
         </div>
     </div>
</div>
<?php }?>

<script type="text/javascript">
    Dropzone.autoDiscover = false;
    // or disable for specific dropzone:
    // Dropzone.options.myDropzone = false;
    
    Dropzone.options.myDropzone = {
      paramName: "file", // The name that will be used to transfer the file
      maxFilesize: 2, // MB
      acceptedFiles: ".jpg"
    }; 
    $(function() {
      // Now that the DOM is fully loaded, create the dropzone, and setup the
      // event listeners

    var produk1= new Dropzone("#produk1");
    produk1.on("error", function(file) {
        Materialize.toast('Failed to upload file!', 5000, 'rounded');
    })
    
    produk1.on("success", function(file) {
     Materialize.toast('Be patient your image still processing!', 5000, 'rounded');
    });


/////////////////////////////////

    var produk2= new Dropzone("#produk2");
    produk2.on("error", function(file) {
        Materialize.toast('Failed to upload file!', 5000, 'rounded');
    })
    
    produk2.on("success", function(file) {
     Materialize.toast('Be patient your image still processing!', 5000, 'rounded');
    });

/////////////////////////////////

    var produk3= new Dropzone("#produk3");
    produk3.on("error", function(file) {
        Materialize.toast('Failed to upload file!', 5000, 'rounded');
    })
    
    produk3.on("success", function(file) {
     Materialize.toast('Be patient your image still processing!', 5000, 'rounded');
    });

/////////////////////////////////

    var produk4= new Dropzone("#produk4");
    produk4.on("error", function(file) {
        Materialize.toast('Failed to upload file!', 5000, 'rounded');
    })
    
    produk4.on("success", function(file) {
     Materialize.toast('Be patient your image still processing!', 5000, 'rounded');
    });
/////////////////////////////////

    var produk5= new Dropzone("#produk5");
    produk5.on("error", function(file) {
        Materialize.toast('Failed to upload file!', 5000, 'rounded');
    })
    
    produk5.on("success", function(file) {
     Materialize.toast('Be patient your image still processing!', 5000, 'rounded');
    });
/////////////////////////////////

    var produk6= new Dropzone("#produk6");
    produk6.on("error", function(file) {
        Materialize.toast('Failed to upload file!', 5000, 'rounded');
    })
    
    produk6.on("success", function(file) {
     Materialize.toast('Be patient your image still processing!', 5000, 'rounded');

    });

    })
    
    </script> 
    
    <script type="text/javascript">
$(document).ready(function(){
 $(".button-collapse").sideNav();
  });
</script>