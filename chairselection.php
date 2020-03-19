<?php require('header.php'); ?>
<link rel="stylesheet" href="css/style.css">

  <main> <!-- MAIN START -->
    <div class="background-top-title"></div>
    <div class="wrapper no-flex">
        <div class="title flex">
            <h1>Sonic (ORIGINAL VERSION)<br>Friday 14 februari 2020, 18:10 AMO zaal 1</h1>
            <a class="go-back" href="movie.php">Go Back</a>
        </div>
        <div class="progress">
            <a href="tickets.php">
                <div class="bar">1. CHOSING TICKETS</div>
            </a>
            <a href="chairselection.php">
                <div class="bar selected">2. SELECTING CHAIRS</div>
            </a>
            <a href="ordering.php">
                <div class="bar">3. ORDERING</div>
            </a>
            <a href="#">
                <div class="bar">4. PAYOUT</div>
            </a>
        </div>
        <div class="text-center">
          <h2>Plaatsen selecteren</h2>
        </div>
        <form action="ordering.php" method="POST">
            <table class="chair-selection">
                <tbody>
                    <tr>
                        <td class="nmber"><h4>1.</h4></td>
                        <td class="seat">
                            <input type="checkbox" name="seats[]" value="01" id="01" />
                            <label for="01">01</label>
                        </td>
                        <td class="seat">
                            <input type="checkbox" name="seats[]" value="02" id="02" />
                            <label for="02">02</label>
                        </td>
                        <td class="seat">
                            <input type="checkbox" name="seats[]" value="03" id="03"/>
                            <label for="03">03</label>
                        </td>
                        <td><div class="spacing"></div></td>
                        <td class="seat">
                            <input type="checkbox" name="seats[]" value="04" id="04"/>
                            <label for="04">04</label>
                        </td>
                        <td class="seat">
                            <input type="checkbox" name="seats[]" value="05" id="05"/>
                            <label for="05">05</label>
                        </td>
                        <td class="seat">
                            <input type="checkbox" name="seats[]" value="06" id="06"/>
                            <label for="06">06</label>
                        </td>
                        <td><div class="spacing"></div></td>
                        <td class="seat">
                            <input type="checkbox" name="seats[]" value="07" id="07"/>
                            <label for="07">07</label>
                        </td>
                        <td class="seat">
                            <input type="checkbox" name="seats[]" value="08" id="08"/>
                            <label for="08">08</label>
                        </td>
                        <td class="seat">
                            <input type="checkbox" name="seats[]" value="09" id="09"/>
                            <label for="09">09</label>
                        </td>
                        <td class="nmber"><h4>1.</h4></td>
                    </tr>
                    <tr>
                        <td class="nmber"><h4>2.</h4></td>
                        <td class="seat">
                            <input type="checkbox" name="seats[]" value="10" id="10" />
                            <label for="10">10</label>
                        </td>
                        <td class="seat">
                            <input type="checkbox" name="seats[]" value="11" id="11" />
                            <label for="11">11</label>
                        </td>
                        <td class="seat">
                            <input type="checkbox" name="seats[]" value="12" id="12" />
                            <label for="12">12</label>
                        </td>
                        <td><div class="spacing"></div></td>
                        <td class="seat">
                            <input type="checkbox" name="seats[]" value="13" id="13" />
                            <label for="13">13</label>
                        </td>
                        <td class="seat">
                            <input type="checkbox" name="seats[]" value="14" id="14" />
                            <label for="14">14</label>
                        </td>
                        <td class="seat">
                            <input type="checkbox" name="seats[]" value="15" id="15" />
                            <label for="15">15</label>
                        </td>
                        <td><div class="spacing"></div></td>
                        <td class="seat">
                            <input type="checkbox" name="seats[]" value="16" id="15" />
                            <label for="16">16</label>
                        </td>
                        <td class="seat">
                            <input type="checkbox" name="seats[]" value="17" id="17" />
                            <label for="17">17</label>
                        </td>
                        <td class="seat">
                            <input type="checkbox" name="seats[]" value="18" id="18" />
                            <label for="18">18</label>
                        </td>
                        <td class="nmber"><h4>2.</h4></td>
                    </tr>
                    <tr>
                        <td class="nmber"><h4>3.</h4></td>
                        <td class="seat">
                            <input type="checkbox" name="seats[]" value="19" id="19" />
                            <label for="19">19</label>
                        </td>
                        <td class="seat">
                            <input type="checkbox" name="seats[]" value="20" id="20" />
                            <label for="20">20</label>
                        </td>
                        <td class="seat">
                            <input type="checkbox" name="seats[]" value="21" id="21"/>
                            <label for="21">21</label>
                        </td>
                        <td><div class="spacing"></div></td>
                        <td class="seat">
                            <input type="checkbox" name="seats[]" value="22" id="22"/>
                            <label for="22">22</label>
                        </td>
                        <td class="seat">
                            <input type="checkbox" name="seats[]" value="23" id="23"/>
                            <label for="23">23</label>
                        </td>
                        <td class="seat">
                            <input type="checkbox" name="seats[]" value="24" id="24"/>
                            <label for="24">24</label>
                        </td>
                        <td><div class="spacing"></div></td>
                        <td class="seat">
                            <input type="checkbox" name="seats[]" value="25" id="25"/>
                            <label for="25">25</label>
                        </td>
                        <td class="seat">
                            <input type="checkbox" name="seats[]" value="26" id="26"/>
                            <label for="26">26</label>
                        </td>
                        <td class="seat">
                            <input type="checkbox" name="seats[]" value="27" id="27"/>
                            <label for="27">27</label>
                        </td>
                        <td class="nmber"><h4>3.</h4></td>
                    </tr>
                    <tr>
                        <td class="nmber"><h4>4.</h4></td>
                        <td class="seat">
                            <input type="checkbox" name="seats[]" value="28" id="28" />
                            <label for="28">28</label>
                        </td>
                        <td class="seat">
                            <input type="checkbox" name="seats[]" value="29" id="29" />
                            <label for="29">29</label>
                        </td>
                        <td class="seat">
                            <input type="checkbox" name="seats[]" value="30" id="30"/>
                            <label for="30">30</label>
                        </td>
                        <td><div class="spacing"></div></td>
                        <td class="seat">
                            <input type="checkbox" name="seats[]" value="31" id="31"/>
                            <label for="31">31</label>
                        </td>
                        <td class="seat">
                            <input type="checkbox" name="seats[]" value="32" id="32"/>
                            <label for="32">32</label>
                        </td>
                        <td class="seat">
                            <input type="checkbox" name="seats[]" value="33" id="33"/>
                            <label for="33">33</label>
                        </td>
                        <td><div class="spacing"></div></td>
                        <td class="seat">
                            <input type="checkbox" name="seats[]" value="34" id="34"/>
                            <label for="34">34</label>
                        </td>
                        <td class="seat">
                            <input type="checkbox" name="seats[]" value="35" id="35"/>
                            <label for="35">35</label>
                        </td>
                        <td class="seat">
                            <input type="checkbox" name="seats[]" value="36" id="36"/>
                            <label for="36">36</label>
                        </td>
                        <td class="nmber"><h4>4.</h4></td>
                    </tr>
                    <tr>
                        <td class="nmber"><h4>5.</h4></td>
                        <td class="seat">
                            <input type="checkbox" name="seats[]" value="37" id="37" />
                            <label for="37">37</label>
                        </td>
                        <td class="seat">
                            <input type="checkbox" name="seats[]" value="38" id="38" />
                            <label for="38">38</label>
                        </td>
                        <td class="seat">
                            <input type="checkbox" name="seats[]" value="39" id="39"/>
                            <label for="39">39</label>
                        </td>
                        <td><div class="spacing"></div></td>
                        <td class="seat">
                            <input type="checkbox" name="seats[]" value="40" id="40"/>
                            <label for="40">40</label>
                        </td>
                        <td class="seat">
                            <input type="checkbox" name="seats[]" value="41" id="41"/>
                            <label for="41">41</label>
                        </td>
                        <td class="seat">
                            <input type="checkbox" name="seats[]" value="42" id="42"/>
                            <label for="42">42</label>
                        </td>
                        <td><div class="spacing"></div></td>
                        <td class="seat">
                            <input type="checkbox" name="seats[]" value="43" id="43"/>
                            <label for="43">43</label>
                        </td>
                        <td class="seat">
                            <input type="checkbox" name="seats[]" value="44" id="44"/>
                            <label for="44">44</label>
                        </td>
                        <td class="seat">
                            <input type="checkbox" name="seats[]" value="45" id="45"/>
                            <label for="45">45</label>
                        </td>
                        <td class="nmber"><h4>5.</h4></td>
                    </tr>
                    <tr>
                        <td class="nmber"><h4>6.</h4></td>
                        <td><div class="spacing"></div></td>
                        <td class="seat">
                            <input type="checkbox" name="seats[]" value="46" id="46" />
                            <label for="46">46</label>
                        </td>
                        <td class="seat">
                            <input type="checkbox" name="seats[]" value="47" id="47"/>
                            <label for="47">47</label>
                        </td>
                        <td><div class="spacing"></div></td>
                        <td class="seat">
                            <input type="checkbox" name="seats[]" value="48" id="48"/>
                            <label for="48">48</label>
                        </td>
                        <td class="seat">
                            <input type="checkbox" name="seats[]" value="49" id="49"/>
                            <label for="49">49</label>
                        </td>
                        <td class="seat">
                            <input type="checkbox" name="seats[]" value="50" id="50"/>
                            <label for="50">50</label>
                        </td>
                        <td><div class="spacing"></div></td>
                        <td class="seat">
                            <input type="checkbox" name="seats[]" value="51" id="51"/>
                            <label for="51">51</label>
                        </td>
                        <td class="seat">
                            <input type="checkbox" name="seats[]" value="52" id="52"/>
                            <label for="52">52</label>
                        </td>
                        <td><div class="spacing"></div></td>
                        <td class="nmber"><h4>6.</h4></td>
                    </tr>
                    <tr>
                        <td class="nmber"><h4>7.</h4></td>
                        <td><div class="spacing"></div></td>
                        <td class="seat">
                            <input type="checkbox" name="seats[]" value="53" id="53" />
                            <label for="53">53</label>
                        </td>
                        <td class="seat">
                            <input type="checkbox" name="seats[]" value="54" id="54"/>
                            <label for="54">54</label>
                        </td>
                        <td><div class="spacing"></div></td>
                        <td class="seat">
                            <input type="checkbox" name="seats[]" value="55" id="55"/>
                            <label for="55">55</label>
                        </td>
                        <td class="seat">
                            <input type="checkbox" name="seats[]" value="56" id="56"/>
                            <label for="56">56</label>
                        </td>
                        <td class="seat">
                            <input type="checkbox" name="seats[]" value="57" id="57"/>
                            <label for="57">57</label>
                        </td>
                        <td><div class="spacing"></div></td>
                        <td class="seat">
                            <input type="checkbox" name="seats[]" value="58" id="58"/>
                            <label for="58">58</label>
                        </td>
                        <td class="seat">
                            <input type="checkbox" name="seats[]" value="59" id="59"/>
                            <label for="59">59</label>
                        </td>
                        <td><div class="spacing"></div></td>
                        <td class="nmber"><h4>7.</h4></td>
                    </tr>
                    <tr>
                        <td class="nmber"><h4>8.</h4></td>
                        <td><div class="spacing"></div></td>
                        <td class="seat">
                            <input type="checkbox" name="seats[]" value="60" id="60" />
                            <label for="60">60</label>
                        </td>
                        <td class="seat">
                            <input type="checkbox" name="seats[]" value="61" id="61"/>
                            <label for="61">61</label>
                        </td>
                        <td><div class="spacing"></div></td>
                        <td class="seat">
                            <input type="checkbox" name="seats[]" value="62" id="62"/>
                            <label for="62">62</label>
                        </td>
                        <td class="seat">
                            <input type="checkbox" name="seats[]" value="63" id="63"/>
                            <label for="63">63</label>
                        </td>
                        <td class="seat">
                            <input type="checkbox" name="seats[]" value="64" id="64"/>
                            <label for="64">64</label>
                        </td>
                        <td><div class="spacing"></div></td>
                        <td class="seat">
                            <input type="checkbox" name="seats[]" value="65" id="65" checked/>
                            <label for="65">65</label>
                        </td>
                        <td class="seat">
                            <input type="checkbox" name="seats[]" value="66" id="66" checked/>
                            <label for="66">66</label>
                        </td>
                        <td><div class="spacing"></div></td>
                        <td class="nmber"><h4>8.</h4></td>
                    </tr>
                </tbody>
            </table>
            <div class="screen"><h3>scherm</h3></div>
              <input type="submit" name="submit" style="background:#FFC426; border:none; font-size: 1.3rem;" class="btn btn-primary btn-block btn-large" value="STEP 3: CONFIRMATION">
        </form>
    </div> <!-- WRAPPER END -->
  </main> <!-- MAIN END -->
  <footer>
    <?php require('footer.php'); ?>
  </footer>
