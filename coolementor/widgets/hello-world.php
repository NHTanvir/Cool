<?php
/**
 * Elementor Hello World Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class Hello_World_Widget extends \Elementor\Widget_Base {

	/**
	 * Get widget name.
	 *
	 * Retrieve Hello World widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'Hello World';
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve Hello World widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return __( '12 Image', 'boilerplate-elementor-extension' );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve Hello World widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'dashicons dashicons-format-image';
	}

	/**
	 * Get widget categories.
	 *
	 * Retrieve the list of categories the Hello World widget belongs to.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return array Widget categories.
	 */
	public function get_categories() {
		return [ 'Boilerplate' ];
	}

	/**
	 * Register Hello World widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function _register_controls() {

		$this->start_controls_section(
			'section_content',
			[
				'label' => __( 'Content', 'plugin-name' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		///my custom


		



		//end of my custom





		$this->end_controls_section();

	}

	protected function render(){
		?>
		<table>
		 <?php
		 $rand =0; 
		 for($i = 0 ;$i<3; $i++){
			 ?>
			 <tr> 
			 <?php   
			 for($j =$rand ; $j <$rand+4; $j++){
			 ?>
			 <td><img src="https://source.unsplash.com/random/700x700?sig=<?php echo $j+1?> width='250px' height='300px'"></td>
	   <?php  }?>
	   </tr>
	 <?php
		 $rand = $rand+5;
	 }?>
		</table>
   <?php     
	 }
}
?>
