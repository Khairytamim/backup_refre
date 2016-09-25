		<div class="col s12 l9 panel-divider">
			<div class="card-panel lighten-2 title-panel">
					   <h5><i class="material-icons">mail</i><br>Pesan</h5>
			</div>      
				  <div class="card-panel lighten-2"> 
					   <div class="row">
							<div class="col s12" style="padding:10px">
									<ul class="tabs">
										<li class="tab col s3"><a class="active" href="#tab1">Kotak Masuk</a></li>
										<li class="tab col s3"><a href="#tab2">Terkirim</a></li>
										<li class="tab col s3"><a href="#tab3">Arsip</a></li>
										<li class="tab col s3"><a href="#tab4">Sampah</a></li>
									</ul>
								
								<div id="tab1">
									  <div class="card-panel">
                                                                                <?php foreach($pesan->result() as $r){?>
										<p>Kode pesanan: <?php echo $r->id_billing_detail;?> Nama Produk: <?php echo $r->nama_produk;?> Ke Alamat: <?php echo $r->alamat_penerima;?>, <?php echo $r->provinsi_penerima;?></p>
                                                                                <?php }?>
									  </div>
								</div>
									
								<div id="tab2">
									  <div class="card-panel">
										<p>Tidak ada data</p>
									  </div>
								</div>
									
								<div id="tab3">
									  <div class="card-panel">
										<p>Tidak ada data</p>
									  </div>
								</div>
									
								<div id="tab4">
									  <div class="card-panel">
										<p>Tidak ada data</p>
									  </div>
								</div>
							</div>
					   </div>
				   </div>
		</div>
     </div>
</div>