<?php get_header(); ?>

<body>
	<?php include('00Component/GlobalNav.php'); ?>
	<?php include('00Component/OVL.php'); ?>
	<?php include('00Component/Parts/Modal/ModalCookiePolicy.php'); ?>
	<main>
		<?php include('01Top/01FirstView.php'); ?>
		<div data-js-bg-change>
			<?php include('01Top/08Strengths.php'); ?>
			<?php include('01Top/07CaseStudy.php'); ?>
			<?php include('01Top/06Flow.php'); ?>
			<?php include('01Top/02Skill.php'); ?>
			<?php include('01Top/04About.php'); ?>
			<?php include('01Top/05Contact.php'); ?>
		</div>
	</main>
	<?php get_footer(); ?>