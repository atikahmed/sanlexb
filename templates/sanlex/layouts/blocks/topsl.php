<?php
//dikurangiuser1 $spotlight = array ('user1','user2','user3','user4','user5');
$spotlight = array ();
$botsl = $this->calSpotlight ($spotlight,100);
if( $botsl ) :
?>
<!-- TOP SPOTLIGHT -->
<div id="ja-topsl" class="wrap">
<div class="main clearfix">
<!--dipindah ke footer
	<?php if( $this->countModules('user1') ): ?>
	<div class="ja-box column ja-box<?php echo $botsl['user1']['class']; ?>" style="width: <?php echo $botsl['user1']['width']; ?>;">
		<jdoc:include type="modules" name="user1" style="JAxhtml" />
	</div>
	<?php endif; ?>
//-->
<!--dipindah ke main
	<?php if( $this->countModules('user2') ): ?>
	<div class="ja-box column ja-box<?php echo $botsl['user2']['class']; ?>" style="width: <?php echo $botsl['user2']['width']; ?>;">
		<jdoc:include type="modules" name="user2" style="JAxhtml" />
	</div>
	<?php endif; ?>
//-->
<!-- untuk slider ultimate
	<?php if( $this->countModules('user3') ): ?>
	<div class="ja-box column ja-box<?php echo $botsl['user3']['class']; ?>" style="width: <?php echo $botsl['user3']['width']; ?>;">
		<jdoc:include type="modules" name="user3" style="JAxhtml" />
	</div>
	<?php endif; ?>
//-->
<!-- untuk posisi top-1
	<?php if( $this->countModules('user4') ): ?>
	<div class="ja-box column ja-box<?php echo $botsl['user4']['class']; ?>" style="width: <?php echo $botsl['user4']['width']; ?>;">
		<jdoc:include type="modules" name="user4" style="JAxhtml" />
	</div>
	<?php endif; ?>
//-->
<!-- untuk posisi top-b
	<?php if( $this->countModules('user5') ): ?>
	<div class="ja-box column ja-box<?php echo $botsl['user5']['class']; ?>" style="width: <?php echo $botsl['user5']['width']; ?>;">
		<jdoc:include type="modules" name="user5" style="JAxhtml" />
	</div>
	<?php endif; ?>
//-->
</div>
</div>

<!-- //TOP SPOTLIGHT -->
<?php endif; ?>
<!--
	<div class="ja-breadcrums">
		<strong><?php echo JText::_('Arca :')?></strong> <jdoc:include type="module" name="breadcrumbs" />
	</div>
//-->