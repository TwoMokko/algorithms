class Slider {
	from_year						: number;
	until_year						: number;

	count							: number;
	years							: number;
	x_from							: number;
	x_until							: number;
	// month_from						: number;
	// month_until						: number;
	year_from_active				: number;
	year_until_active				: number;
	month_from_active				: number;
	month_until_active				: number;

	constructor(from_year, until_year) {
		this.from_year				= from_year;
		this.until_year				= until_year;

		/* Creating elements */
		let $container				= $('<div/>', { class: 'container' });
		let $switcher				= $('<div/>', { class: 'switcher' });
		let $switch_years			= $('<div/>', { class: 'switch_years' });
		let $switch_months			= $('<div/>', { class: 'switch_months' });
		let $slider_container		= $('<div/>', { class: 'slider_container' });
		let $line_container			= $('<div/>', { class: 'line_container' });
		let $line					= $('<div/>', { class: 'line' });
		let $line_active			= $('<div/>', { class: 'line_active' });
		let $touch_from				= $('<div/>', { class: 'touch_from' });
		let $touch_until			= $('<div/>', { class: 'touch_until' });
		let $window_from			= $('<div/>', { class: 'window_from' });
		let $window_until			= $('<div/>', { class: 'window_until' });
		let $slider_years			= $('<div/>', { class: 'slider_years' });
		let $slider_months			= $('<div/>', { class: 'slider_months' });


		/* Building DOM */
		$container.append(
			$switcher.append(
				$switch_years,
				$switch_months
			),
			$slider_container.append(
				$line_container.append(
					$line.append(
						$line_active,
						$touch_from,
						$touch_until
					),
					$window_from,
					$window_until
				),
				$slider_years,
				$slider_months
			)
		)

		/* Events */
		$switch_years.on('click', () => {})
		$switch_months.on('click', () => {})
		$touch_from.on('mousedown', () => { /* mousemove и mouseup */ })
		$touch_until.on('mousedown', () => { /* mousemove и mouseup */ })

		$slider_years.on('mousedown', () => { /* mousemove и mouseup */ })
		$slider_years.on('wheel', () => {})
		$slider_months.on('mousedown', () => { /* mousemove и mouseup */ })
		$slider_months.on('wheel', () => {})

		/* МЕТОД: Цикл создания спанов или дивов в slider_years/months, навешивание события onclick */
	}

	private CreateSlider(): void {}

	private Redraw(): void {}

	private GetCount(): number { return 0; }
}