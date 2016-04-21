<section>
	<div class="container">
        <div class="row">
            <div class="col-md-12">
            	<?php
				/* @var $this SiteController */
				/* @var $error array */

				$this->pageTitle=Yii::app()->name . ' - Error';
				$this->breadcrumbs=array(
					'Error',
				);
				?>

				<h2>Error <?php echo $code; ?></h2>

				<div class="error">
				<?php echo CHtml::encode($message); ?>
				</div>
            </div>
        </div>
    </div>
</section>