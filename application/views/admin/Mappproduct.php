<div class="">
<script src='https://www.google.com/recaptcha/api.js'></script>
	
    <form method="post" action="<?=base_url();?>Product/Testcaptch">
        <?php
          require_once('recaptchalib.php');
          $publickey = "6Lfl8x4TAAAAADW_6s8eD2h4DeE96_0WggMT0qfZ"; // you got this from the signup page
          echo recaptcha_get_html($publickey);
        ?>
        <input type="submit" />
      </form>

                <div class="col-md-12 col-sm-12 col-xs-12">
				<div class="g-recaptcha" data-sitekey="6Lfl8x4TAAAAADW_6s8eD2h4DeE96_0WggMT0qfZ"></div>
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Product List</h2>
                                   
                                    <div class="clearfix"></div>
                                </div>

                                <div class="x_content">

                                    
                                    <table class="table table-striped responsive-utilities jambo_table bulk_action">
                                        <thead>
                                            <tr class="headings">
                                                <th>
                                                    <input type="checkbox" id="check-all" class="flat">
                                                </th>
                                                <th class="column-title">Invoice </th>
                                                <th class="column-title">Invoice Date </th>
                                                <th class="column-title">Order </th>
                                                <th class="column-title">Bill to Name </th>
                                                <th class="column-title">Status </th>
                                                <th class="column-title">Amount </th>
                                                <th class="column-title no-link last"><span class="nobr">Action</span>
                                                </th>
                                                <th class="bulk-actions" colspan="7">
                                                    <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                            </th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr class="even pointer">
                                    <td class="a-center "><input type="checkbox" class="flat" name="table_records" ></td>
                                    <td class=" ">121000040</td>
                                    <td class=" ">May 23, 2014 11:47:56 PM </td>
                                    <td class=" ">121000210 <i class="success fa fa-long-arrow-up"></i></td>
                                    <td class=" ">John Blank L</td>
                                    <td class=" ">Paid</td>
                                    <td class="a-right a-right ">$7.45</td>
                                    <td class=" last"><a href="#">View</a>
                                                    </td>
                                            </tr>
                                            <tr class="odd pointer">
                                                <td class="a-center ">
                                                    <input type="checkbox" class="flat" name="table_records">
                                                </td>
                                                <td class=" ">121000039</td>
                                                <td class=" ">May 23, 2014 11:30:12 PM</td>
                                                <td class=" ">121000208 <i class="success fa fa-long-arrow-up"></i>
                                                </td>
                                                <td class=" ">John Blank L</td>
                                                <td class=" ">Paid</td>
                                                <td class="a-right a-right ">$741.20</td>
                                                <td class=" last"><a href="#">View</a>
                                                </td>
                                            </tr>
                                            <tr class="even pointer">
                                                <td class="a-center ">
                                                    <input type="checkbox" class="flat" name="table_records">
                                                </td>
                                                <td class=" ">121000038</td>
                                                <td class=" ">May 24, 2014 10:55:33 PM</td>
                                                <td class=" ">121000203 <i class="success fa fa-long-arrow-up"></i>
                                                </td>
                                                <td class=" ">Mike Smith</td>
                                                <td class=" ">Paid</td>
                                                <td class="a-right a-right ">$432.26</td>
                                                <td class=" last"><a href="#">View</a>
                                                </td>
                                            </tr>
                                            <tr class="odd pointer">
                                                <td class="a-center ">
                                                    <input type="checkbox" class="flat" name="table_records">
                                                </td>
                                                <td class=" ">121000037</td>
                                                <td class=" ">May 24, 2014 10:52:44 PM</td>
                                                <td class=" ">121000204</td>
                                                <td class=" ">Mike Smith</td>
                                                <td class=" ">Paid</td>
                                                <td class="a-right a-right ">$333.21</td>
                                                <td class=" last"><a href="#">View</a>
                                                </td>
                                            </tr>
                                            <tr class="even pointer">
                                                <td class="a-center ">
                                                    <input type="checkbox" class="flat" name="table_records">
                                                </td>
                                                <td class=" ">121000040</td>
                                                <td class=" ">May 24, 2014 11:47:56 PM </td>
                                                <td class=" ">121000210</td>
                                                <td class=" ">John Blank L</td>
                                                <td class=" ">Paid</td>
                                                <td class="a-right a-right ">$7.45</td>
                                                <td class=" last"><a href="#">View</a>
                                                </td>
                                            </tr>
                                            
                                            </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>

                    
                </div>