<?php
/**
 * Select field class.
 */
class RWMB_Sidebars_field extends RWMB_Choice_Field
{
	/**
	 * Enqueue scripts and styles
	 */
	public static function admin_enqueue_scripts()
	{
		wp_enqueue_style( 'rwmb-select', RWMB_CSS_URL . 'select.css', array(), RWMB_VER );
		wp_enqueue_style( 'select2', RWMB_CSS_URL . 'select2/select2.css', array(), '3.2' );
		wp_enqueue_style( 'rwmb-select-advanced', RWMB_CSS_URL . 'select-advanced.css', array(), RWMB_VER );

		wp_register_script( 'select2', RWMB_JS_URL . 'select2/select2.min.js', array(), '3.2', true );
		wp_enqueue_script( 'rwmb-select-advanced', RWMB_JS_URL . 'select-advanced.js', array( 'select2' ), RWMB_VER, true );
		wp_enqueue_script( 'rwmb-select', RWMB_JS_URL . 'select.js', array(), RWMB_VER, true );
	}

	/**
	 * Walk options
	 *
	 * @param mixed $meta
	 * @param array $field
	 * @param mixed $options
	 * @param mixed $db_fields
	 *
	 * @return string
	 */
	public static function walk( $options, $db_fields, $meta, $field )
	{	
		foreach ( $GLOBALS['wp_registered_sidebars'] as $sidebar ) {
			$options[$sidebar['id']] =(object)array('label'=> ucwords( $sidebar['name']), 'value'=> $sidebar['id']);
		}
		
		$attributes = call_user_func( array( RW_Meta_Box::get_class_name( $field ), 'get_attributes' ), $field, $meta );
		$walker     = new RWMB_Select_Walker( $db_fields, $field, $meta );
		$output     = sprintf(
			'<select %s>',
			self::render_attributes( $attributes )
		);
		if ( false === $field['multiple'] )
		{
			$output .= isset( $field['placeholder'] ) ? "<option value=''>{$field['placeholder']}</option>" : '<option></option>';
		}
		$output .= $walker->walk( $options, $field['flatten'] ? - 1 : 0 );
		$output .= '</select>';
		$output .= self::get_select_all_html( $field );
		return $output;
	}

	/**
	 * Normalize parameters for field
	 *
	 * @param array $field
	 * @return array
	 */
	public static function normalize( $field )
	{
		$field = parent::normalize( $field );
		$field = $field['multiple'] ? RWMB_Multiple_Values_Field::normalize( $field ) : $field;
		$field = wp_parse_args( $field, array(
			'size'            => $field['multiple'] ? 5 : 0,
			'select_all_none' => false,
		) );

		return $field;
	}

	/**
	 * Get the attributes for a field
	 *
	 * @param array $field
	 * @param mixed $value
	 *
	 * @return array
	 */
	public static function get_attributes( $field, $value = null )
	{
		$attributes = parent::get_attributes( $field, $value );
		$attributes = wp_parse_args( $attributes, array(
			'multiple' => $field['multiple'],
			'size'     => $field['size'],
		) );

		return $attributes;
	}

	/**
	 * Get html for select all|none for multiple select
	 *
	 * @param array $field
	 * @return string
	 */
	public static function get_select_all_html( $field )
	{
		if ( $field['multiple'] && $field['select_all_none'] )
		{
			return '<div class="rwmb-select-all-none">' . esc_html__( 'Select', 'pl-emallshop-extensions' ) . ': <a data-type="all" href="#">' . esc_html__( 'All', 'pl-emallshop-extensions' ) . '</a> | <a data-type="none" href="#">' . esc_html__( 'None', 'pl-emallshop-extensions' ) . '</a></div>';
		}
		return '';
	}
}
