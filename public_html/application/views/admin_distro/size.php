<?php if($type==0){?>
	<div class="input-field col s12" >
		<h5>Detail Ukuran</h5>
		<p>Inputkan ukuran dalam ukuran (cm)</p>
		<div class="row">
                	<div class="input-field col s12">
                        	<textarea name="ukuran" id="ukuran" class="materialize-textarea" ><?php echo set_value('ukuran'); ?></textarea>
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
            <td><input name="c<?php echo $i;?>" type="number" min="0" step="0.1" ></td>
            <?php }?>
          </tr>
          <tr>
            <td style="text-align:left; padding-right:30px"><b>LENGTH</b></td>
            <?php for($i=1; $i<=6; $i++){?>
            <td><input name="l<?php echo $i;?>" type="number" min="0" step="0.1" ></td>
            <?php }?>
          </tr>
          <tr>
            <td style="text-align:left; padding-right:30px"><b>SHOULDER WIDTH</b></td>
            <?php for($i=1; $i<=6; $i++){?>
            <td><input name="s<?php echo $i;?>" type="number" min="0" step="0.1" ></td>
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
            <td><input name="u<?php echo $i;?>" type="number" min="0" step="0.1" ></td>
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
            <td><input name="i<?php echo $i;?>" type="number" min="0" step="0.1" ></td>
            <?php }?>
          </tr>
          <tr>
            <td style="text-align:left; padding-right:30px"><b>WAIST</b></td>
            <?php for($i=27; $i<=38; $i++){?>
            <td><input name="w<?php echo $i;?>" type="number" min="0" step="0.1" ></td>
            <?php }?>
          </tr>
          <tr>
            <td style="text-align:left; padding-right:30px"><b>HIP</b></td>
            <?php for($i=27; $i<=38; $i++){?>
            <td><input name="h<?php echo $i;?>" type="number" min="0" step="0.1" ></td>
            <?php }?>
          </tr>
          <tr>
            <td style="text-align:left; padding-right:30px"><b>THIGH</b></td>
             <?php for($i=27; $i<=38; $i++){?>
            <td><input name="t<?php echo $i;?>" type="number" min="0" step="0.1" ></td>
            <?php }?>
          </tr>
        </tbody>
      </table>
     </div>
<?php }?>