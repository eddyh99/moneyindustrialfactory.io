<!-- ======= Contact Section ======= -->
<section id="services" class="services">
    <div class="container" data-aos="fade-up">
        <header class="section-header">
            <p>Fill The Form</p>
        </header>
        
        <div class="row col-sm-12 box-mif px-2">
            <div class="row form-group mt-2">
                <div class="col-6 col-sm-6 col-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="askme" id="askme1" value="individual" checked>
                        <label>Individual</label>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="askme" id="askme2" value="company">
                        <label>Company</label>
                    </div>
                </div>
            </div>
            <div id="individu" class="row mt-3">
                <form action="<?=base_url()?>home/individualmail" method="post">
                    <div class="form-group row">
                        <label class="col-12 col-sm-12 col-md-4">Title</label>
                        <div class="col-12 col-sm-12 col-md-4">
                            <select id="title" name="title" class="form-select">
                                <option value="Mr">Mr.</option>
                                <option value="Mrs">Mrs.</option>
                                <option value="Miss">Miss.</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <label class="col-12 col-sm-12 col-md-4">First Name</label>
                        <div class="col-12 col-sm-12 col-md-4">
                            <input id="firstname" name="firstname" type="text" class="form-control" maxlength="50" required/>
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <label class="col-12 col-sm-12 col-md-4">Last Name</label>
                        <div class="col-12 col-sm-12 col-md-4">
                            <input id="lastname" name="lastname" type="text" class="form-control" maxlength="50"/>
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <label class="col-12 col-sm-12 col-md-4">Email</label>
                        <div class="col-12 col-sm-12 col-md-4">
                            <input id="email" name="email" type="email" class="form-control" maxlength="50" required/>
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <label class="col-12 col-sm-12 col-md-4">Phone</label>
                        <div class="col-12 col-sm-12 col-md-4">
                            <input id="phone" name="phone" type="text" class="form-control" maxlength="20" required/>
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <label class="col-12 col-sm-12 col-md-4">Country</label>
                        <div class="col-12 col-sm-12 col-md-4">
                            <select id="country" name="country" class="form-select">
                				<option value="Afganistan">Afganistan</option>
                				<option value="Afrika Selatan">Afrika Selatan</option>
                				<option value="Afrika Tengah">Afrika Tengah</option>
                				<option value="Albania">Albania</option>
                				<option value="Aljazair">Aljazair</option>
                				<option value="Amerika Serikat">Amerika Serikat</option>
                				<option value="Andorra">Andorra</option>
                				<option value="Angola">Angola</option>
                				<option value="Antigua dan Barbuda">Antigua dan Barbuda</option>
                				<option value="Arab Saudi">Arab Saudi</option>
                				<option value="Argentina">Argentina</option>
                				<option value="Armenia">Armenia</option>
                				<option value="Australia">Australia</option>
                				<option value="Austria">Austria</option>
                				<option value="Azerbaijan">Azerbaijan</option>
                				<option value="Bahama">Bahama</option>
                				<option value="Bahrain">Bahrain</option>
                				<option value="Bangladesh">Bangladesh</option>
                				<option value="Barbados">Barbados</option>
                				<option value="Belanda">Belanda</option>
                				<option value="Belarus">Belarus</option>
                				<option value="Belgia">Belgia</option>
                				<option value="Belize">Belize</option>
                				<option value="Benin">Benin</option>
                				<option value="Bhutan">Bhutan</option>
                				<option value="Bolivia">Bolivia</option>
                				<option value="Bosnia dan Herzegovina">Bosnia dan Herzegovina</option>
                				<option value="Botswana">Botswana</option>
                				<option value="Brasil">Brasil</option>
                				<option value="Britania Raya">Britania Raya</option>
                				<option value="Brunei Darussalam">Brunei Darussalam</option>
                				<option value="Bulgaria">Bulgaria</option>
                				<option value="Burkina Faso">Burkina Faso</option>
                				<option value="Burundi">Burundi</option>
                				<option value="Ceko">Ceko</option>
                				<option value="Chad">Chad</option>
                				<option value="Chili">Chili</option>
                				<option value="China">China</option>
                				<option value="Denmark">Denmark</option>
                				<option value="Djibouti">Djibouti</option>
                				<option value="Dominika">Dominika</option>
                				<option value="Ekuador">Ekuador</option>
                				<option value="El Salvador">El Salvador</option>
                				<option value="Eritrea">Eritrea</option>
                				<option value="Estonia">Estonia</option>
                				<option value="Ethiopia">Ethiopia</option>
                				<option value="Fiji">Fiji</option>
                				<option value="Filipina">Filipina</option>
                				<option value="Finlandia">Finlandia</option>
                				<option value="Gabon">Gabon</option>
                				<option value="Gambia">Gambia</option>
                				<option value="Georgia">Georgia</option>
                				<option value="Ghana">Ghana</option>
                				<option value="Grenada">Grenada</option>
                				<option value="Guatemala">Guatemala</option>
                				<option value="Guinea">Guinea</option>
                				<option value="Guinea Bissau">Guinea Bissau</option>
                				<option value="Guinea Khatulistiwa">Guinea Khatulistiwa</option>
                				<option value="Guyana">Guyana</option>
                				<option value="Haiti">Haiti</option>
                				<option value="Honduras">Honduras</option>
                				<option value="Hongaria">Hongaria</option>
                				<option value="India">India</option>
                				<option value="Indonesia">Indonesia</option>
                				<option value="Irak">Irak</option>
                				<option value="Iran">Iran</option>
                				<option value="Irlandia">Irlandia</option>
                				<option value="Islandia">Islandia</option>
                				<option value="Israel">Israel</option>
                				<option value="Italia">Italia</option>
                				<option value="Jamaika">Jamaika</option>
                				<option value="Jepang">Jepang</option>
                				<option value="Jerman">Jerman</option>
                				<option value="Kamboja">Kamboja</option>
                				<option value="Kamerun">Kamerun</option>
                				<option value="Kanada">Kanada</option>
                				<option value="Kazakhstan">Kazakhstan</option>
                				<option value="Kenya">Kenya</option>
                				<option value="Kirgizstan">Kirgizstan</option>
                				<option value="Kiribati">Kiribati</option>
                				<option value="Kolombia">Kolombia</option>
                				<option value="Komoro">Komoro</option>
                				<option value="Republik Kongo">Republik Kongo</option>
                				<option value="Korea Selatan">Korea Selatan</option>
                				<option value="Korea Utara">Korea Utara</option>
                				<option value="Kosta Rika">Kosta Rika</option>
                				<option value="Kroasia">Kroasia</option>
                				<option value="Kuba">Kuba</option>
                				<option value="Kuwait">Kuwait</option>
                				<option value="Laos">Laos</option>
                				<option value="Latvia">Latvia</option>
                				<option value="Lebanon">Lebanon</option>
                				<option value="Lesotho">Lesotho</option>
                				<option value="Liberia">Liberia</option>
                				<option value="Libya">Libya</option>
                				<option value="Liechtenstein">Liechtenstein</option>
                				<option value="Lituania">Lituania</option>
                				<option value="Luksemburg">Luksemburg</option>
                				<option value="Madagaskar">Madagaskar</option>
                				<option value="Makedonia">Makedonia</option>
                				<option value="Maladewa">Maladewa</option>
                				<option value="Malawi">Malawi</option>
                				<option value="Malaysia">Malaysia</option>
                				<option value="Mali">Mali</option>
                				<option value="Malta">Malta</option>
                				<option value="Maroko">Maroko</option>
                				<option value="Marshall">Marshall</option>
                				<option value="Mauritania">Mauritania</option>
                				<option value="Mauritius">Mauritius</option>
                				<option value="Meksiko">Meksiko</option>
                				<option value="Mesir">Mesir</option>
                				<option value="Mikronesia">Mikronesia</option>
                				<option value="Moldova">Moldova</option>
                				<option value="Monako">Monako</option>
                				<option value="Mongolia">Mongolia</option>
                				<option value="Montenegro">Montenegro</option>
                				<option value="Mozambik">Mozambik</option>
                				<option value="Myanmar">Myanmar</option>
                				<option value="Namibia">Namibia</option>
                				<option value="Nauru">Nauru</option>
                				<option value="Nepal">Nepal</option>
                				<option value="Niger">Niger</option>
                				<option value="Nigeria">Nigeria</option>
                				<option value="Nikaragua">Nikaragua</option>
                				<option value="Norwegia">Norwegia</option>
                				<option value="Oman">Oman</option>
                				<option value="Pakistan">Pakistan</option>
                				<option value="Palau">Palau</option>
                				<option value="Panama">Panama</option>
                				<option value="Pantai Gading">Pantai Gading</option>
                				<option value="Papua Nugini">Papua Nugini</option>
                				<option value="Paraguay">Paraguay</option>
                				<option value="Perancis">Perancis</option>
                				<option value="Peru">Peru</option>
                				<option value="Polandia">Polandia</option>
                				<option value="Portugal">Portugal</option>
                				<option value="Qatar">Qatar</option>
                				<option value="Republik Demokratik Kongo">Republik Demokratik Kongo</option>
                				<option value="Republik Dominika">Republik Dominika</option>
                				<option value="Rumania">Rumania</option>
                				<option value="Rusia">Rusia</option>
                				<option value="Rwanda">Rwanda</option>
                				<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                				<option value="Saint Lucia">Saint Lucia</option>
                				<option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                				<option value="Samoa">Samoa</option>
                				<option value="San Marino">San Marino</option>
                				<option value="Sao Tome and Principe">Sao Tome and Principe</option>
                				<option value="Selandia Baru">Selandia Baru</option>
                				<option value="Senegal">Senegal</option>
                				<option value="Serbia">Serbia</option>
                				<option value="Seychelles">Seychelles</option>
                				<option value="Sierra Leone">Sierra Leone</option>
                				<option value="Singapura">Singapura</option>
                				<option value="Siprus">Siprus</option>
                				<option value="Slovenia">Slovenia</option>
                				<option value="Slowakia">Slowakia</option>
                				<option value="Solomon">Solomon</option>
                				<option value="Somalia">Somalia</option>
                				<option value="Spanyol">Spanyol</option>
                				<option value="Sri Lanka">Sri Lanka</option>
                				<option value="Sudan">Sudan</option>
                				<option value="Sudan Selatan">Sudan Selatan</option>
                				<option value="Suriah">Suriah</option>
                				<option value="Suriname">Suriname</option>
                				<option value="Swaziland">Swaziland</option>
                				<option value="Swedia">Swedia</option>
                				<option value="Swiss">Swiss</option>
                				<option value="Tajikistan">Tajikistan</option>
                				<option value="Tanjung Verde">Tanjung Verde</option>
                				<option value="Tanzania">Tanzania</option>
                				<option value="Thailand">Thailand</option>
                				<option value="Timor Leste">Timor Leste</option>
                				<option value="Togo">Togo</option>
                				<option value="Tonga">Tonga</option>
                				<option value="Trinidad and Tobago">Trinidad and Tobago</option>
                				<option value="Tunisia">Tunisia</option>
                				<option value="Turki">Turki</option>
                				<option value="Turkmenistan">Turkmenistan</option>
                				<option value="Tuvalu">Tuvalu</option>
                				<option value="Uganda">Uganda</option>
                				<option value="Ukraina">Ukraina</option>
                				<option value="Uni Emirat Arab">Uni Emirat Arab</option>
                				<option value="Uruguay">Uruguay</option>
                				<option value="Uzbekistan">Uzbekistan</option>
                				<option value="Vanuatu">Vanuatu</option>
                				<option value="Venezuela">Venezuela</option>
                				<option value="Vietnam">Vietnam</option>
                				<option value="Yaman">Yaman</option>
                				<option value="Yordania">Yordania</option>
                				<option value="Yunani">Yunani</option>
                				<option value="Zambia">Zambia</option>
                				<option value="Zimbabwe">Zimbabwe</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <label class="col-12 col-sm-12 col-md-4">Preferred Language</label>
                        <div class="col-12 col-sm-12 col-md-4">
                            <input id="language" name="language" type="text" class="form-control" maxlength="20" required/>
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <label class="col-12 col-sm-12 col-md-4">Preferred to Contact</label>
                        <div class="col-12 col-sm-12 col-md-4">
                            <select name="prefcontact" id="prefcontact" class="form-select">
                                <option value="by email">By Email</option>
                                <option value="by phone">By Phone</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <label class="col-12 col-sm-12 col-md-4">Kind of Service</label>
                        <div class="col-12 col-sm-12 col-md-4">
                            <select id="service" name="service" class="form-select">
                                <option value="CYBER SECURITY & PENETRATION TESTING">CYBER SECURITY & PENETRATION TESTING</option>
                                <option value="BLOCKCHAIN">BLOCKCHAIN</option>
                                <option value="MINING FOR THIRD PARTIES">MINING FOR THIRD PARTIES</option>
                                <option value="DEVELOPMENT WEB PLATFORMS">DEVELOPMENT WEB PLATFORMS</option>
                                <option value="PAYMENT AND COLLECTION SOLUTIONS">PAYMENT AND COLLECTION SOLUTIONS</option>
                                <option value="RESEARCH & DEVELOPMENT">RESEARCH & DEVELOPMENT</option>
                                <option value="ICO">ICO</option>
                                <option value="DSPC">DSPC</option>
                                <option value="FEASIBILITY STUDY">FEASIBILITY STUDY</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <label class="col-12 col-sm-12 col-md-4">Message</label>
                        <div class="col-12 col-sm-12 col-md-8">
                            <textarea id="message" name="message" class="form-control" rows="5" cols="10"/></textarea>
                        </div>
                    </div>
                    <div class="col-12 mt-2 mb-2 text-end">
                        <button type="submit" class="btn regismail">Submit</button>
                    </div>
                </form>
            </div>
            <div id="company" class="row mt-3">
                <form action="<?=base_url()?>home/companymail" method="post">
                    <div class="col-12 mt-2 mb-2">
                        <h2 class="mb-3">Company Detail</h2>
                    </div>
                    <div class="form-group row mt-2">
                        <label class="col-12 col-sm-12 col-md-4">Company Name</label>
                        <div class="col-12 col-sm-12 col-md-4">
                            <input id="company" name="company" type="text" class="form-control" maxlength="50"/>
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <label class="col-12 col-sm-12 col-md-4">Email</label>
                        <div class="col-12 col-sm-12 col-md-4">
                            <input id="cemail" name="cemail" type="email" class="form-control" maxlength="50" required/>
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <label class="col-12 col-sm-12 col-md-4">Phone</label>
                        <div class="col-12 col-sm-12 col-md-4">
                            <input id="cphone" name="cphone" type="text" class="form-control" maxlength="20" required/>
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <label class="col-12 col-sm-12 col-md-4">Country</label>
                        <div class="col-12 col-sm-12 col-md-4">
                            <select id="ccountry" name="ccountry" class="form-select">
                				<option value="Afganistan">Afganistan</option>
                				<option value="Afrika Selatan">Afrika Selatan</option>
                				<option value="Afrika Tengah">Afrika Tengah</option>
                				<option value="Albania">Albania</option>
                				<option value="Aljazair">Aljazair</option>
                				<option value="Amerika Serikat">Amerika Serikat</option>
                				<option value="Andorra">Andorra</option>
                				<option value="Angola">Angola</option>
                				<option value="Antigua dan Barbuda">Antigua dan Barbuda</option>
                				<option value="Arab Saudi">Arab Saudi</option>
                				<option value="Argentina">Argentina</option>
                				<option value="Armenia">Armenia</option>
                				<option value="Australia">Australia</option>
                				<option value="Austria">Austria</option>
                				<option value="Azerbaijan">Azerbaijan</option>
                				<option value="Bahama">Bahama</option>
                				<option value="Bahrain">Bahrain</option>
                				<option value="Bangladesh">Bangladesh</option>
                				<option value="Barbados">Barbados</option>
                				<option value="Belanda">Belanda</option>
                				<option value="Belarus">Belarus</option>
                				<option value="Belgia">Belgia</option>
                				<option value="Belize">Belize</option>
                				<option value="Benin">Benin</option>
                				<option value="Bhutan">Bhutan</option>
                				<option value="Bolivia">Bolivia</option>
                				<option value="Bosnia dan Herzegovina">Bosnia dan Herzegovina</option>
                				<option value="Botswana">Botswana</option>
                				<option value="Brasil">Brasil</option>
                				<option value="Britania Raya">Britania Raya</option>
                				<option value="Brunei Darussalam">Brunei Darussalam</option>
                				<option value="Bulgaria">Bulgaria</option>
                				<option value="Burkina Faso">Burkina Faso</option>
                				<option value="Burundi">Burundi</option>
                				<option value="Ceko">Ceko</option>
                				<option value="Chad">Chad</option>
                				<option value="Chili">Chili</option>
                				<option value="China">China</option>
                				<option value="Denmark">Denmark</option>
                				<option value="Djibouti">Djibouti</option>
                				<option value="Dominika">Dominika</option>
                				<option value="Ekuador">Ekuador</option>
                				<option value="El Salvador">El Salvador</option>
                				<option value="Eritrea">Eritrea</option>
                				<option value="Estonia">Estonia</option>
                				<option value="Ethiopia">Ethiopia</option>
                				<option value="Fiji">Fiji</option>
                				<option value="Filipina">Filipina</option>
                				<option value="Finlandia">Finlandia</option>
                				<option value="Gabon">Gabon</option>
                				<option value="Gambia">Gambia</option>
                				<option value="Georgia">Georgia</option>
                				<option value="Ghana">Ghana</option>
                				<option value="Grenada">Grenada</option>
                				<option value="Guatemala">Guatemala</option>
                				<option value="Guinea">Guinea</option>
                				<option value="Guinea Bissau">Guinea Bissau</option>
                				<option value="Guinea Khatulistiwa">Guinea Khatulistiwa</option>
                				<option value="Guyana">Guyana</option>
                				<option value="Haiti">Haiti</option>
                				<option value="Honduras">Honduras</option>
                				<option value="Hongaria">Hongaria</option>
                				<option value="India">India</option>
                				<option value="Indonesia">Indonesia</option>
                				<option value="Irak">Irak</option>
                				<option value="Iran">Iran</option>
                				<option value="Irlandia">Irlandia</option>
                				<option value="Islandia">Islandia</option>
                				<option value="Israel">Israel</option>
                				<option value="Italia">Italia</option>
                				<option value="Jamaika">Jamaika</option>
                				<option value="Jepang">Jepang</option>
                				<option value="Jerman">Jerman</option>
                				<option value="Kamboja">Kamboja</option>
                				<option value="Kamerun">Kamerun</option>
                				<option value="Kanada">Kanada</option>
                				<option value="Kazakhstan">Kazakhstan</option>
                				<option value="Kenya">Kenya</option>
                				<option value="Kirgizstan">Kirgizstan</option>
                				<option value="Kiribati">Kiribati</option>
                				<option value="Kolombia">Kolombia</option>
                				<option value="Komoro">Komoro</option>
                				<option value="Republik Kongo">Republik Kongo</option>
                				<option value="Korea Selatan">Korea Selatan</option>
                				<option value="Korea Utara">Korea Utara</option>
                				<option value="Kosta Rika">Kosta Rika</option>
                				<option value="Kroasia">Kroasia</option>
                				<option value="Kuba">Kuba</option>
                				<option value="Kuwait">Kuwait</option>
                				<option value="Laos">Laos</option>
                				<option value="Latvia">Latvia</option>
                				<option value="Lebanon">Lebanon</option>
                				<option value="Lesotho">Lesotho</option>
                				<option value="Liberia">Liberia</option>
                				<option value="Libya">Libya</option>
                				<option value="Liechtenstein">Liechtenstein</option>
                				<option value="Lituania">Lituania</option>
                				<option value="Luksemburg">Luksemburg</option>
                				<option value="Madagaskar">Madagaskar</option>
                				<option value="Makedonia">Makedonia</option>
                				<option value="Maladewa">Maladewa</option>
                				<option value="Malawi">Malawi</option>
                				<option value="Malaysia">Malaysia</option>
                				<option value="Mali">Mali</option>
                				<option value="Malta">Malta</option>
                				<option value="Maroko">Maroko</option>
                				<option value="Marshall">Marshall</option>
                				<option value="Mauritania">Mauritania</option>
                				<option value="Mauritius">Mauritius</option>
                				<option value="Meksiko">Meksiko</option>
                				<option value="Mesir">Mesir</option>
                				<option value="Mikronesia">Mikronesia</option>
                				<option value="Moldova">Moldova</option>
                				<option value="Monako">Monako</option>
                				<option value="Mongolia">Mongolia</option>
                				<option value="Montenegro">Montenegro</option>
                				<option value="Mozambik">Mozambik</option>
                				<option value="Myanmar">Myanmar</option>
                				<option value="Namibia">Namibia</option>
                				<option value="Nauru">Nauru</option>
                				<option value="Nepal">Nepal</option>
                				<option value="Niger">Niger</option>
                				<option value="Nigeria">Nigeria</option>
                				<option value="Nikaragua">Nikaragua</option>
                				<option value="Norwegia">Norwegia</option>
                				<option value="Oman">Oman</option>
                				<option value="Pakistan">Pakistan</option>
                				<option value="Palau">Palau</option>
                				<option value="Panama">Panama</option>
                				<option value="Pantai Gading">Pantai Gading</option>
                				<option value="Papua Nugini">Papua Nugini</option>
                				<option value="Paraguay">Paraguay</option>
                				<option value="Perancis">Perancis</option>
                				<option value="Peru">Peru</option>
                				<option value="Polandia">Polandia</option>
                				<option value="Portugal">Portugal</option>
                				<option value="Qatar">Qatar</option>
                				<option value="Republik Demokratik Kongo">Republik Demokratik Kongo</option>
                				<option value="Republik Dominika">Republik Dominika</option>
                				<option value="Rumania">Rumania</option>
                				<option value="Rusia">Rusia</option>
                				<option value="Rwanda">Rwanda</option>
                				<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                				<option value="Saint Lucia">Saint Lucia</option>
                				<option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                				<option value="Samoa">Samoa</option>
                				<option value="San Marino">San Marino</option>
                				<option value="Sao Tome and Principe">Sao Tome and Principe</option>
                				<option value="Selandia Baru">Selandia Baru</option>
                				<option value="Senegal">Senegal</option>
                				<option value="Serbia">Serbia</option>
                				<option value="Seychelles">Seychelles</option>
                				<option value="Sierra Leone">Sierra Leone</option>
                				<option value="Singapura">Singapura</option>
                				<option value="Siprus">Siprus</option>
                				<option value="Slovenia">Slovenia</option>
                				<option value="Slowakia">Slowakia</option>
                				<option value="Solomon">Solomon</option>
                				<option value="Somalia">Somalia</option>
                				<option value="Spanyol">Spanyol</option>
                				<option value="Sri Lanka">Sri Lanka</option>
                				<option value="Sudan">Sudan</option>
                				<option value="Sudan Selatan">Sudan Selatan</option>
                				<option value="Suriah">Suriah</option>
                				<option value="Suriname">Suriname</option>
                				<option value="Swaziland">Swaziland</option>
                				<option value="Swedia">Swedia</option>
                				<option value="Swiss">Swiss</option>
                				<option value="Tajikistan">Tajikistan</option>
                				<option value="Tanjung Verde">Tanjung Verde</option>
                				<option value="Tanzania">Tanzania</option>
                				<option value="Thailand">Thailand</option>
                				<option value="Timor Leste">Timor Leste</option>
                				<option value="Togo">Togo</option>
                				<option value="Tonga">Tonga</option>
                				<option value="Trinidad and Tobago">Trinidad and Tobago</option>
                				<option value="Tunisia">Tunisia</option>
                				<option value="Turki">Turki</option>
                				<option value="Turkmenistan">Turkmenistan</option>
                				<option value="Tuvalu">Tuvalu</option>
                				<option value="Uganda">Uganda</option>
                				<option value="Ukraina">Ukraina</option>
                				<option value="Uni Emirat Arab">Uni Emirat Arab</option>
                				<option value="Uruguay">Uruguay</option>
                				<option value="Uzbekistan">Uzbekistan</option>
                				<option value="Vanuatu">Vanuatu</option>
                				<option value="Venezuela">Venezuela</option>
                				<option value="Vietnam">Vietnam</option>
                				<option value="Yaman">Yaman</option>
                				<option value="Yordania">Yordania</option>
                				<option value="Yunani">Yunani</option>
                				<option value="Zambia">Zambia</option>
                				<option value="Zimbabwe">Zimbabwe</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 mt-2 mb-2">
                        <h2 class="mb-3">Contact Detail</h2>
                    </div>
                    <div class="form-group row">
                        <label class="col-12 col-sm-12 col-md-4">Title</label>
                        <div class="col-12 col-sm-12 col-md-4">
                            <select id="cptitle" name="cptitle" class="form-select">
                                <option value="Mr">Mr.</option>
                                <option value="Mrs">Mrs.</option>
                                <option value="Miss">Miss.</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <label class="col-12 col-sm-12 col-md-4">First Name</label>
                        <div class="col-12 col-sm-12 col-md-4">
                            <input id="cpfirstname" name="cpfirstname" type="text" class="form-control" maxlength="50" required/>
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <label class="col-12 col-sm-12 col-md-4">Last Name</label>
                        <div class="col-12 col-sm-12 col-md-4">
                            <input id="cplastname" name="cplastname" type="text" class="form-control" maxlength="50"/>
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <label class="col-12 col-sm-12 col-md-4">Email</label>
                        <div class="col-12 col-sm-12 col-md-4">
                            <input id="cpemail" name="cpemail" type="email" class="form-control" maxlength="50" required/>
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <label class="col-12 col-sm-12 col-md-4">Phone</label>
                        <div class="col-12 col-sm-12 col-md-4">
                            <input id="cpphone" name="cpphone" type="text" class="form-control" maxlength="20" required/>
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <label class="col-12 col-sm-12 col-md-4">Country</label>
                        <div class="col-12 col-sm-12 col-md-4">
                            <select id="cpcountry" name="cpcountry" class="form-select">
                				<option value="Afganistan">Afganistan</option>
                				<option value="Afrika Selatan">Afrika Selatan</option>
                				<option value="Afrika Tengah">Afrika Tengah</option>
                				<option value="Albania">Albania</option>
                				<option value="Aljazair">Aljazair</option>
                				<option value="Amerika Serikat">Amerika Serikat</option>
                				<option value="Andorra">Andorra</option>
                				<option value="Angola">Angola</option>
                				<option value="Antigua dan Barbuda">Antigua dan Barbuda</option>
                				<option value="Arab Saudi">Arab Saudi</option>
                				<option value="Argentina">Argentina</option>
                				<option value="Armenia">Armenia</option>
                				<option value="Australia">Australia</option>
                				<option value="Austria">Austria</option>
                				<option value="Azerbaijan">Azerbaijan</option>
                				<option value="Bahama">Bahama</option>
                				<option value="Bahrain">Bahrain</option>
                				<option value="Bangladesh">Bangladesh</option>
                				<option value="Barbados">Barbados</option>
                				<option value="Belanda">Belanda</option>
                				<option value="Belarus">Belarus</option>
                				<option value="Belgia">Belgia</option>
                				<option value="Belize">Belize</option>
                				<option value="Benin">Benin</option>
                				<option value="Bhutan">Bhutan</option>
                				<option value="Bolivia">Bolivia</option>
                				<option value="Bosnia dan Herzegovina">Bosnia dan Herzegovina</option>
                				<option value="Botswana">Botswana</option>
                				<option value="Brasil">Brasil</option>
                				<option value="Britania Raya">Britania Raya</option>
                				<option value="Brunei Darussalam">Brunei Darussalam</option>
                				<option value="Bulgaria">Bulgaria</option>
                				<option value="Burkina Faso">Burkina Faso</option>
                				<option value="Burundi">Burundi</option>
                				<option value="Ceko">Ceko</option>
                				<option value="Chad">Chad</option>
                				<option value="Chili">Chili</option>
                				<option value="China">China</option>
                				<option value="Denmark">Denmark</option>
                				<option value="Djibouti">Djibouti</option>
                				<option value="Dominika">Dominika</option>
                				<option value="Ekuador">Ekuador</option>
                				<option value="El Salvador">El Salvador</option>
                				<option value="Eritrea">Eritrea</option>
                				<option value="Estonia">Estonia</option>
                				<option value="Ethiopia">Ethiopia</option>
                				<option value="Fiji">Fiji</option>
                				<option value="Filipina">Filipina</option>
                				<option value="Finlandia">Finlandia</option>
                				<option value="Gabon">Gabon</option>
                				<option value="Gambia">Gambia</option>
                				<option value="Georgia">Georgia</option>
                				<option value="Ghana">Ghana</option>
                				<option value="Grenada">Grenada</option>
                				<option value="Guatemala">Guatemala</option>
                				<option value="Guinea">Guinea</option>
                				<option value="Guinea Bissau">Guinea Bissau</option>
                				<option value="Guinea Khatulistiwa">Guinea Khatulistiwa</option>
                				<option value="Guyana">Guyana</option>
                				<option value="Haiti">Haiti</option>
                				<option value="Honduras">Honduras</option>
                				<option value="Hongaria">Hongaria</option>
                				<option value="India">India</option>
                				<option value="Indonesia">Indonesia</option>
                				<option value="Irak">Irak</option>
                				<option value="Iran">Iran</option>
                				<option value="Irlandia">Irlandia</option>
                				<option value="Islandia">Islandia</option>
                				<option value="Israel">Israel</option>
                				<option value="Italia">Italia</option>
                				<option value="Jamaika">Jamaika</option>
                				<option value="Jepang">Jepang</option>
                				<option value="Jerman">Jerman</option>
                				<option value="Kamboja">Kamboja</option>
                				<option value="Kamerun">Kamerun</option>
                				<option value="Kanada">Kanada</option>
                				<option value="Kazakhstan">Kazakhstan</option>
                				<option value="Kenya">Kenya</option>
                				<option value="Kirgizstan">Kirgizstan</option>
                				<option value="Kiribati">Kiribati</option>
                				<option value="Kolombia">Kolombia</option>
                				<option value="Komoro">Komoro</option>
                				<option value="Republik Kongo">Republik Kongo</option>
                				<option value="Korea Selatan">Korea Selatan</option>
                				<option value="Korea Utara">Korea Utara</option>
                				<option value="Kosta Rika">Kosta Rika</option>
                				<option value="Kroasia">Kroasia</option>
                				<option value="Kuba">Kuba</option>
                				<option value="Kuwait">Kuwait</option>
                				<option value="Laos">Laos</option>
                				<option value="Latvia">Latvia</option>
                				<option value="Lebanon">Lebanon</option>
                				<option value="Lesotho">Lesotho</option>
                				<option value="Liberia">Liberia</option>
                				<option value="Libya">Libya</option>
                				<option value="Liechtenstein">Liechtenstein</option>
                				<option value="Lituania">Lituania</option>
                				<option value="Luksemburg">Luksemburg</option>
                				<option value="Madagaskar">Madagaskar</option>
                				<option value="Makedonia">Makedonia</option>
                				<option value="Maladewa">Maladewa</option>
                				<option value="Malawi">Malawi</option>
                				<option value="Malaysia">Malaysia</option>
                				<option value="Mali">Mali</option>
                				<option value="Malta">Malta</option>
                				<option value="Maroko">Maroko</option>
                				<option value="Marshall">Marshall</option>
                				<option value="Mauritania">Mauritania</option>
                				<option value="Mauritius">Mauritius</option>
                				<option value="Meksiko">Meksiko</option>
                				<option value="Mesir">Mesir</option>
                				<option value="Mikronesia">Mikronesia</option>
                				<option value="Moldova">Moldova</option>
                				<option value="Monako">Monako</option>
                				<option value="Mongolia">Mongolia</option>
                				<option value="Montenegro">Montenegro</option>
                				<option value="Mozambik">Mozambik</option>
                				<option value="Myanmar">Myanmar</option>
                				<option value="Namibia">Namibia</option>
                				<option value="Nauru">Nauru</option>
                				<option value="Nepal">Nepal</option>
                				<option value="Niger">Niger</option>
                				<option value="Nigeria">Nigeria</option>
                				<option value="Nikaragua">Nikaragua</option>
                				<option value="Norwegia">Norwegia</option>
                				<option value="Oman">Oman</option>
                				<option value="Pakistan">Pakistan</option>
                				<option value="Palau">Palau</option>
                				<option value="Panama">Panama</option>
                				<option value="Pantai Gading">Pantai Gading</option>
                				<option value="Papua Nugini">Papua Nugini</option>
                				<option value="Paraguay">Paraguay</option>
                				<option value="Perancis">Perancis</option>
                				<option value="Peru">Peru</option>
                				<option value="Polandia">Polandia</option>
                				<option value="Portugal">Portugal</option>
                				<option value="Qatar">Qatar</option>
                				<option value="Republik Demokratik Kongo">Republik Demokratik Kongo</option>
                				<option value="Republik Dominika">Republik Dominika</option>
                				<option value="Rumania">Rumania</option>
                				<option value="Rusia">Rusia</option>
                				<option value="Rwanda">Rwanda</option>
                				<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                				<option value="Saint Lucia">Saint Lucia</option>
                				<option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                				<option value="Samoa">Samoa</option>
                				<option value="San Marino">San Marino</option>
                				<option value="Sao Tome and Principe">Sao Tome and Principe</option>
                				<option value="Selandia Baru">Selandia Baru</option>
                				<option value="Senegal">Senegal</option>
                				<option value="Serbia">Serbia</option>
                				<option value="Seychelles">Seychelles</option>
                				<option value="Sierra Leone">Sierra Leone</option>
                				<option value="Singapura">Singapura</option>
                				<option value="Siprus">Siprus</option>
                				<option value="Slovenia">Slovenia</option>
                				<option value="Slowakia">Slowakia</option>
                				<option value="Solomon">Solomon</option>
                				<option value="Somalia">Somalia</option>
                				<option value="Spanyol">Spanyol</option>
                				<option value="Sri Lanka">Sri Lanka</option>
                				<option value="Sudan">Sudan</option>
                				<option value="Sudan Selatan">Sudan Selatan</option>
                				<option value="Suriah">Suriah</option>
                				<option value="Suriname">Suriname</option>
                				<option value="Swaziland">Swaziland</option>
                				<option value="Swedia">Swedia</option>
                				<option value="Swiss">Swiss</option>
                				<option value="Tajikistan">Tajikistan</option>
                				<option value="Tanjung Verde">Tanjung Verde</option>
                				<option value="Tanzania">Tanzania</option>
                				<option value="Thailand">Thailand</option>
                				<option value="Timor Leste">Timor Leste</option>
                				<option value="Togo">Togo</option>
                				<option value="Tonga">Tonga</option>
                				<option value="Trinidad and Tobago">Trinidad and Tobago</option>
                				<option value="Tunisia">Tunisia</option>
                				<option value="Turki">Turki</option>
                				<option value="Turkmenistan">Turkmenistan</option>
                				<option value="Tuvalu">Tuvalu</option>
                				<option value="Uganda">Uganda</option>
                				<option value="Ukraina">Ukraina</option>
                				<option value="Uni Emirat Arab">Uni Emirat Arab</option>
                				<option value="Uruguay">Uruguay</option>
                				<option value="Uzbekistan">Uzbekistan</option>
                				<option value="Vanuatu">Vanuatu</option>
                				<option value="Venezuela">Venezuela</option>
                				<option value="Vietnam">Vietnam</option>
                				<option value="Yaman">Yaman</option>
                				<option value="Yordania">Yordania</option>
                				<option value="Yunani">Yunani</option>
                				<option value="Zambia">Zambia</option>
                				<option value="Zimbabwe">Zimbabwe</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <label class="col-12 col-sm-12 col-md-4">Preferred Language</label>
                        <div class="col-12 col-sm-12 col-md-4">
                            <input id="cplanguage" name="cplanguage" type="text" class="form-control" maxlength="20" required/>
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <label class="col-12 col-sm-12 col-md-4">Preferred to Contact</label>
                        <div class="col-12 col-sm-12 col-md-4">
                            <select name="cpprefcontact" id="cpprefcontact" class="form-select">
                                <option value="by email">By Email</option>
                                <option value="by phone">By Phone</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <label class="col-12 col-sm-12 col-md-4">Kind of Service</label>
                        <div class="col-12 col-sm-12 col-md-4">
                            <select id="cpservice" name="cpservice" class="form-select">
                                <option value="CYBER SECURITY & PENETRATION TESTING">CYBER SECURITY & PENETRATION TESTING</option>
                                <option value="BLOCKCHAIN">BLOCKCHAIN</option>
                                <option value="MINING FOR THIRD PARTIES">MINING FOR THIRD PARTIES</option>
                                <option value="DEVELOPMENT WEB PLATFORMS">DEVELOPMENT WEB PLATFORMS</option>
                                <option value="PAYMENT AND COLLECTION SOLUTIONS">PAYMENT AND COLLECTION SOLUTIONS</option>
                                <option value="RESEARCH & DEVELOPMENT">RESEARCH & DEVELOPMENT</option>
                                <option value="ICO">ICO</option>
                                <option value="DSPC">DSPC</option>
                                <option value="FEASIBILITY STUDY">FEASIBILITY STUDY</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <label class="col-12 col-sm-12 col-md-4">Message</label>
                        <div class="col-12 col-sm-12 col-md-8">
                            <textarea id="cpmessage" name="cpmessage" class="form-control" rows="5" cols="10"/></textarea>
                        </div>
                    </div>
                    <div class="col-12 mt-2 mb-2 text-end">
                        <button type="submit" class="btn regismail">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>