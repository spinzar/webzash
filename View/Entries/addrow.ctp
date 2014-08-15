<?php
/**
 * The MIT License (MIT)
 *
 * Webzash - Easy to use web based double entry accounting software
 *
 * Copyright (c) 2014 Prashant Shah <pshah.mumbai@gmail.com>
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */
?>
<?php
	// Generate a random id to use in below form array
	$i = time() + rand  (0, time()) + rand  (0, time()) + rand  (0, time());
	echo '<tr>';
	echo '<td>' . $this->Form->input('Entryitem.' . $i . '.dc', array('type' => 'select', 'type' => 'select', 'options' => array('D' => 'Dr', 'C' => 'Cr'), 'class' => 'dc-dropdown', 'label' => false)) . '</td>';
	echo '<td>' . $this->Form->input('Entryitem.' . $i . '.ledger_id', array('type' => 'select', 'options' => $ledgers, 'class' => 'ledger-dropdown', 'label' => false)) . '</td>';
	echo '<td>' . $this->Form->input('Entryitem.' . $i . '.dr_amount', array('label' => false, 'class' => 'dr-item')) . '</td>';
	echo '<td>' . $this->Form->input('Entryitem.' . $i . '.cr_amount', array('label' => false, 'class' => 'cr-item')) . '</td>';

	echo '<td>';
	echo $this->Html->tag('span', $this->Html->tag('i', '', array('class' => 'glyphicon glyphicon-plus')) . __d('webzash', ' Add'), array('class' => 'addrow', 'escape' => false)) . '<span class="link-pad"></span>';
	echo $this->Html->tag('span', $this->Html->tag('i', '', array('class' => 'glyphicon glyphicon-trash')) . __d('webzash', ' Delete'), array('class' => 'deleterow', 'escape' => false));
	echo '</td>';

	echo '<td class="ledger-balance"><div></div></td>';
	echo '</tr>';
?>
