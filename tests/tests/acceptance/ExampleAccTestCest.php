<?php

use Step\Acceptance\NodeSteps;

class ExampleAccTestCest {
  /**
   * Node type.
   *
   * @var string
   * node type machine name
   */
  private $node_type;

  function __construct() {
    $this->node_type = 'page';
  }

  public function _before(AcceptanceTester $I) {
  }

  public function _after(AcceptanceTester $I) {
  }

  /**   TESTS     */

  /**
   * Node create test.
   *
   * @param \AcceptanceTester $I
   * @param \Step\Acceptance\NodeSteps $N
   */
  public function nodeCreateTest(AcceptanceTester $I, NodeSteps $N) {
    $I->wantToTest('Node create.');
    $node_values = array(
      'title' => 'Acceptance - create node test - ' . date('d.m.Y H:i:s'),
      'body' => 'test page body',
      'field_boolean_field' => TRUE,
      'field_boolean_field_check' => TRUE,
      'field_date_select_field' => [
        'year' => '2016',
        'month' => '5',
        'day' => '25',
        'hour' => '12',
        'minute' => '30',
      ],
      'field_file_reference' => [
        'file' => 'test_file.txt',
        'description' => 'file description',
      ],
      'field_image_reference' => [
        'file' => 'test_image.jpeg',
        'alt' => 'image alternative text',
        'title' => 'image title',
      ],
      'field_term_reference' => 'term a (1)',
      'field_term_reference_tags_multi' => 'term a (1), term b (2)',
      'field_content_reference' => 'test article (195)',
      'field_content_reference_multi' => 'test article (195)',
      'field_date_field' => [
        'date' => '2005-06-12'
      ],
      'field_date_time_field' => [
        'date' => '2005-06-12',
        'time' => '20:22'
      ],
      'field_timestamp_field' => [
        'date' => '2005-06-12',
        'time' => '20:22'
      ],
      'field_date_time_select_field' => [
        'year' => 1996,
        'month' => 4,
        'day' => 14,
        'hour' => 17,
        'minute' => 30,
      ],
      'field_email_field' => 'sometest.email@gmail.com',
      'field_link_field' => [
        'title' => 'link title',
        'url' => 'http://google.pl',
      ],
      'field_list_integer' => [
        13,
        14,
      ],
      'field_list_text' => 'ccc',
      'field_list_text_checkboxes' => [
        'bbb' => TRUE,
        'ccc' => TRUE,
      ],
      'field_list_text_radio' => 'bbb',
      'field_num' => 100,
      'field_number_decimal' => 10.12,
      'field_number_float' => 10.12,
      'field_term_reference_multi_selec' => [
        1,
        2,
      ],
      'field_term_reference_select_list' => 2,
      'field_text_formatted' => 'field_text_formatted test text',
      'field_text_formatted_long' => 'field_text_formatted_long test text',
      'field_text_formatted_long_sum' => 'field_text_formatted_long_sum test text',
      'field_text_plain' => 'field_text_plain test text',
      'field_text_plain_long' => 'field_text_plain_long test text',
      'field_user_reference' => 0,
      'field_user_reference_sel' => 0,
      'field_user_reference_multi' => [
        1 => TRUE,
        2 => TRUE,
      ],
      'field_user_reference_multi_sel' => [
        0,
        1,
        2,
      ],
    );

    $N->createNewNodeAsUser('admin_user_acceptance', $this->node_type, $node_values);
  }
}
