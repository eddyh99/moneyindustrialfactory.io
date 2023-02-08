	<!-- ======= Services Section ======= -->
    <section id="forgotpass" class="services">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <p>Confirmation</p>
        </header>

		<div class="row box-mif">
			<div class="row mt-5 mb-5">
				<div class="col-sm-12">
                    <?php echo @$_SESSION["failed"]?>
                    <?php echo @$_SESSION["success"]?>
				</div>
			</div>
		</div>

      </div>

    </section><!-- End Values Section -->