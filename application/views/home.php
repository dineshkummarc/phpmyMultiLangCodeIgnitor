<?php
$this->view('header');
?>
<!-- page Header End -->

	<!-- page content -->
	<h1 align="center"> <?php
	 $user=$this->session->userdata('user');
	 writelang('welcome');
	echo " ".strtoupper($user->name);
	  ?></h1>

	<div class="row">
                <div class="container">
                    <div class="col-xs-12 col-sm-12 col-md-12">

                        <div class="form-group">
                            <div class="" style="width: 80%; margin: 0 auto; margin-bottom: 40px;margin-top: 20px;">
                                <!-- <form action="" method="post"> -->
                                    <input type="text" id="search_data" class="form-control search-input" name="search-term" placeholder="<?php echo lang('search');?>" onkeyup="liveSearch()" autocomplete="off">
                                    <div id="suggestions">
                                        <div id="autoSuggestionsList">
                                        </div>
                                    </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>

	<form method="post"  action="<?php echo site_url()."borrows/save"?>">
		<?php
		 if ($this->session->flashdata('success')) {
		?>
			<div class="alert alert-success alert-dismissible">
			  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			  <?php echo $this->session->flashdata('success');?>
			</div>
		<?php
		 }
		?>
	</form>
	<br><br><br>
	<div id="result"></div>

<!-- page footer -->
<?php
$this->view('footer');
?>
<script>

    function liveSearch() {

        var input_data = $('#search_data').val();
        if (input_data.length === 0) {
            $('#suggestions').hide();
        } else {


            $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>home/search",
                data: {search_data: input_data},
                success: function (data) {
                    // return success
                    if (data.length > 0) {
                        $('#suggestions').show();
                        $('#autoSuggestionsList').addClass('auto_list');
                        $('#autoSuggestionsList').html(data);
                    }else{
                        $('#autoSuggestionsList').html("No data found");
                    }
                }
            });
        }
    }

</script>