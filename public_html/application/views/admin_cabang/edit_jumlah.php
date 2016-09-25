          <div class="col s9 panel-divider offset-s3">               
               <div class="card-panel lighten-2 title-panel">
                 <h5><i class="material-icons">shopping_basket<sup>settings</sup></i><br>Edit Produk</h5>
               </div>
               
               <div class="card-panel lighten-2">
                   <div class="row">
                   	<div class="col s4">
                   		<img style="width:100%" src="<?php echo base_url();?>assets/gambar_kaos/small/1/<?php echo $id_produk;?>.jpg" onerror="this.src='<?php echo base_url();?>assets/img/notfound.png'" />
                   	</div>
                   	<div class="col s4">
                   		<img style="width:100%" src="<?php echo base_url();?>assets/gambar_kaos/small/2/<?php echo $id_produk;?>.jpg" onerror="this.src='<?php echo base_url();?>assets/img/notfound.png'" />
                   	</div>
              		<div class="col s4">
                   		<img style="width:100%" src="<?php echo base_url();?>assets/gambar_kaos/small/3/<?php echo $id_produk;?>.jpg" onerror="this.src='<?php echo base_url();?>assets/img/notfound.png'" />
                   	</div>
                   </div>	
               </div>
               <div class="card-panel lighten-2">
                    <h5>Jumlah Produk</h5>
                    <form action="<?php echo base_url();?>AdminCabang/simpan_jumlah_produk/<?php echo $id_produk;?>" method="post">
                         
                         	
                         <?php if($type==0){?>
	<div class="input-field col s12" >
		<h5>Detail Ukuran</h5>
		<p>Inputkan ukuran dalam ukuran (cm)</p>
		<div class="row">
                         	<div class="input-field col s12">
                                   <input name="u1" type="number" min="0" step="1" value="<?php if(isset($item['1'])) echo $item['1'];?>" required>
                                   <label for="ukuran">Jumlah Ukuran</label>
                              </div>
                         </div>
	</div>
			<?php }else if($type==1){?>
				<div class="input-field col s12" >	
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
			            <td style="text-align:left; padding-right:30px"><b>JUMLAH</b></td>
			            <?php for($i=1; $i<=6; $i++){?>
			            <td><input name="u<?php echo $i;?>" type="number" min="0" step="1" value="<?php if(isset($item[$i])) echo $item[$i];?>" required></td>
			            <?php }?>
			          </tr>
			
			        </tbody>
			      </table>
			      </div>
			
			<?php }else if($type==2){ ?>
				<div class="input-field col s12">	
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
			            <td style="text-align:left; padding-right:30px"><b>JUMLAH</b></td>
			            <?php for($i=1; $i<=12; $i++){?>
			            <td><input name="u<?php echo $i;?>" type="number" min="0" step="1"  value="<?php if(isset($item[$i])) echo $item[$i];?>" required></td>
			            <?php }?>
			          </tr>
			          
			        </tbody>
			      </table>
			      
			 </div>
			<?php } else if($type==3){ ?>
				<div class="input-field col s12">
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
			            <td style="text-align:left; padding-right:30px"><b>JUMLAH</b></td>
			            <?php for($i=1; $i<=12; $i++){?>
			            <td><input name="u<?php echo $i;?>" type="number" min="0" step="1"  value="<?php if(isset($item[$i])) echo $item[$i];?>" required></td>
			            <?php }?>
			          </tr>
			        </tbody>
			      </table>
			      
			 </div>
			<?php }?>
                         
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

    
    <script type="text/javascript">
$(document).ready(function(){
 $(".button-collapse").sideNav();
  });

</script>