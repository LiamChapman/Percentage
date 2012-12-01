<?php

/**
 * Percentage
 * @author Liam Chapman
 * @version 1.0
 * @notes I'm really shit at maths and percentages, this class was inspired by the following link:
 * http://www.videojug.com/film/how-to-calculate-percentages
 *
 **/

# TODO:
	# add defaults?
	# formatting?
	# include percentage?
	# toString?

class Percentage {

	/**
	 * Percentage of something i.e.
	 * £450 of £1500, what is the percentage of?
	 * ->of(440, 1500); returns 30. So its 30%
	**/
	public function of ($partial_amount, $total_amount) {
		return ($partial_amount / $total_amount) * 100;
	}

	/**
	 * Remaining or Total amount from a percentage i.e.
	 * You are on level 15 and have progressed 25%, how many levels are there?
	 * ->total_amount(25, 15); returns 60. So there are 60 levels in total.
	**/
	public function total_amount ($percentage_progress, $partial_figure) {
		$decimal = ($percentage_progress / 100);
		return ($partial_figure / $decimal);
	}

	/**
	 * What value to add to an exisitng number i.e. the tip for a bill.
	 * You have a bill of £90, but want to add 12.5%
	 * ->value_to_add(12.5, 90); returns 11.25. So the tip or value to add would be £11.25
	**/
	public function value_to_add ($percent_to_add, $value) {
		$percent_to_add = ($percent_to_add / 100);
		return ($percent_to_add * $value);
	}

	/**
	 * Percentage Increase of value. i.e.
	 * You have been given a raise, so your salary is £28,000. But orignally you were on £25,000. 
	 * What percentage increase was that raise?
	 * ->increaseOf(28000, 25000); returns 12; So it's a 12% increase.
	**/
	public function increaseOf ($after_amount, $before_amount) {
		$after_amount = ($after_amount / $before_amount);
		$after_amount = ($after_amount * 100);
		return $after_amount % 100; // > units left over.
	}

	/**
	 * Percentage Decrease of value i.e.
	 * You own property worth £3,000,000. But now its worth £2,700,000.
	 * What percentage decrease was that reduction?
	 * ->decreaseOf(2700000, 3000000); returns 10; So its a 10% decrease.
	**/
	public function decreaseOf ($after_amount, $before_amount) {
		$after_amount = ($after_amount / $before_amount);
		$after_amount = ($after_amount * 100);
		return 100 % $after_amount; // < units left over
	}

	/**
	 * Orignal value from Reduce/Decrease i.e.
	 * You buy an album for £12 that has a 25% discount, so what was it's orignal value?
	 * ->decreasedFrom(25, 12); returns 16; So the albums orignal price was £16.
	**/
	public function decreasedFrom ($percent_off, $current_value) {
		$value 	 = (100 - $percent_off);
		$decimal = ($value / 100);
		return ($current_value / $decimal);
	}

	/**
	 * Orignal value that has been increased i.e.
	 * You get a bill that is £42 and you have been informed its gone up by 20%. How much were you paying before?
	 * ->increasedFrom(20, 42); returns 35; So you were previously paying £35.
	**/
	public function increasedFrom ($percent_inc, $current_value) {
		$value 	 = ($percent_inc + 100);
		$decimal = ($value / 100);
		return ($current_value / $decimal);
	}

}