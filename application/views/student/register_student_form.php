<?php
$this->load->helper('form');
$this->load->view('includes/header');

	//Create majors dropdown from data sent in from controller
$major_dropdown = array();
foreach($majors AS $major):
	$major_dropdown[$major->major_id] = $major->major;
endforeach;

//Create schools dropdown
$schools_dropdown = array();
foreach($schools AS $school):
	$schools_dropdown[$school->school_id] = $school->school;
endforeach;
	
	//Settings for form
	$first = array(
					'name' 	=> 'first',
					'value' => set_value('first')
				  );
						
	$last = array(
					'name' 	=> 'last',
					'value' => set_value('last')
				);

	$email = array(
				'name' 	=> 'email',
				'value' => set_value('email')
				 );												
						
	$password = array(
				'name' 	=> 'password'
				 );
				 
	$confirm_password = array(
				'name' 	=> 'confirm_password'
				 );			
				 				 
	$year = array(
				'name' 	=> 'year',
				'value' => set_value('year'),
				'maxlength' => 4
				 );
				 
	$school = array(
				'name' 	=> 'school',
				'value' => set_value('school'),
				'options' => $schools_dropdown
				 );
				 
	$major = array(
				'name' 	=> 'major',
				'value' => set_value('major'),
				'options' => $major_dropdown
				 );
				 
	$bio = array(
				'name' 	=> 'bio',
				'value' => set_value('bio')
				 );
	$skills = array(
					'name' => 'skills',
					'value' => set_value('skills')
					); 		
	$software = array(
					'name' => 'software',
					'value' => set_value('software')
					);
					
	$twitter = array(
					'name' => 'twitter',
					'value' => set_value('twitter')
					);
					
	$facebook = array(
					'name' => 'facebook',
					'value' => set_value('facebook')
					);
					
	$linkedin = array(
					'name' => 'linkedin',
					'value' => set_value('linkedin')
					);
					
	$dribbble = array(
					'name' => 'dribbble',
					'value' => set_value('dribbble')
					);
										
	$github = array(
					'name' => 'github',
					'value' => set_value('github')
					);
												

	$submit_button = array(
							'name'	=> 'submit',
							'value' => 'Register',
							'type'  => 'submit'
						  );
?>
	<?php $this->load->view('leftsidebar.php'); ?>
	
	<div id="right-column">
		<?php echo anchor("/", "&laquo; Home", array("class" => "fancy-button")); ?>
		<br /><br /><br />
		<div>
			
		
		<div class="item">
			<hgroup>		
				<h1>Create A Profile on BC Skillz</h1>
				<h2>You must be a student at Boston College in order to register.</h2>
			</hgroup>
		</div>
			<?php echo validation_errors('<div class="redAlert">', '</div>'); ?>
			<?php echo form_open('register/student/register', array("id" => "edit-profile")); ?>
			<h2>Personal Information</h2>
			<?php echo form_label('First Name:', 'first'); echo form_input($first);?>
			<?php echo form_label('Last Name:', 'last'); echo form_input($last); ?>
			<?php echo form_label('School:', 'school'); echo form_dropdown('school', $schools_dropdown); ?>
			<?php echo form_label('Graduation Year:', 'year'); echo form_input($year); ?>
			<?php echo form_label('Major:', 'major'); echo form_dropdown('major', $major_dropdown); ?>
			
			<div class="form-spacing"></div>
			<h2>Login Information</h2>
			<?php echo form_label('BC E-mail Address:', 'email'); echo form_input($email); ?>
			<?php echo form_label('Password:', 'password'); echo form_password($password); ?>
			<?php echo form_label('Confirm Password:', 'confirm-password'); echo form_password($confirm_password); ?>
			
			<div class="form-spacing"></div>
			<h2>BC Skills Profile</h2>
			<?php echo form_label('Bio:', 'bio'); echo form_textarea($bio); ?>
			<?php echo form_label('Skills (separate with commas):', 'skills'); echo form_input($skills); ?>
			<?php echo form_label('software (separate with commas):', 'software'); echo form_input($software); ?>
			<?php echo form_label('Twitter (@username):', 'twitter'); echo form_input($twitter); ?>
			<?php echo form_label('Facebook:', 'facebook'); echo form_input($facebook); ?>
			<?php echo form_label('LinkedIn (public profile):', 'linkedin'); echo form_input($linkedin); ?>
			<?php echo form_label('Dribbble:', 'dribbble'); echo form_input($dribbble); ?>
			<?php echo form_label('GitHub:', 'github'); echo form_input($github); ?>
			<?php echo form_submit($submit_button); ?>

			<?php echo form_close(); ?>
			</div>
		
	</div>
	
<?php $this->load->view('includes/footer'); ?>