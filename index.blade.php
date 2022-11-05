@include('layouts.header')
<title>Резервация на самолетен билет - Aviobul</title>

<body>
  @include('layouts.nav')



  <!-- ACTIONS -->
  <section id="actions" class="py-4 mb-4 bg-light">
    
  </section>

  <!-- POSTS -->
  <section id="posts">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4>Търсене</h4>
            </div>
            <form method="POST" action="#">
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked>
					<label class="form-check-label" for="inlineRadio1">Двупосочен</label>
				  </div>
				  <div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
					<label class="form-check-label" for="inlineRadio2">Еднопосочен</label>
				  </div>
				  <div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
					<label class="form-check-label" for="inlineRadio3">Полет с много отсечки</label>
				  </div>
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label for="from">От:</label>
							<input type="text" class="form-control" id="from" placeholder="От" required oninvalid="this.setCustomValidity('Моля, изберете начална точка')"  oninput="setCustomValidity('')">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="to">До:</label>
							<input type="text" class="form-control" id="to" placeholder="До" required oninvalid="this.setCustomValidity('Моля, изберете крайна точка')"  oninput="setCustomValidity('')">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-2">
						<div class="form-group">
							<span class="form-label">Отиване</span>
							<input class="form-control" type="text" id="datepicker" name="departure" required oninvalid="this.setCustomValidity('Моля, изберете дата на заминаване')"  oninput="setCustomValidity('')">
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group">
							<span class="form-label">Връщане</span>
							<input class="form-control" type="text" id="datepicker1" name="arrival" required oninvalid="this.setCustomValidity('Моля, изберете дата на връщане')"  oninput="setCustomValidity('')">
						</div>
					</div>
				</div>
				<div class="row">
					<fieldset class="trip-paxes">
										
						<label class="field-label">Пътници:</label>
						<div class="wrap pax-widget custom-dropdown  " data-content-id="pax-counter">1</div>
						<input type="hidden" id="adultPaxAmount" name="pa" value="1">
						<input type="hidden" id="youthPaxAmount" name="py" value="0">
						<input type="hidden" id="childPaxAmount" name="pc" value="0">
						<input type="hidden" id="infantPaxAmount" name="pi" value="0">
					</fieldset>
					<div class="col-md-6">
						<div class="form-group">
							<span class="form-label">Класа</span>
							<select class="form-control">
								<option>икономична</option>
								<option>бизнес</option>
								<option>първа</option>
							</select>
							<span class="select-arrow"></span>
						</div>
					</div>
				</div>
				<div class="form-group mt-2">
					<button data-bs-toggle="tooltip" data-bs-placement="top"
					data-bs-custom-class="custom-tooltip"
					data-bs-title="Търси полет" type="submit" name="search_flight" class="btn btn-lg" style="color:#ffff; background-color: rgba(236, 0, 146, 0.658)"><i class="fas fa-search"></i></button>

				</div>
			</form>
          </div>
        </div>
      </div>
    </div>
  </section>

  


  
{{-- footer --}}
  @include('layouts.footer')

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>

	<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

  {{-- datepicker --}}
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );

  $( function() {
    $( "#datepicker1" ).datepicker();
  } );

//   translating the datepicker to bulgarian
  jQuery(function($){
		$.datepicker.regional['bg'] = {
			closeText: 'затвори',
			prevText: '&#x3c;назад',
			nextText: 'напред&#x3e;',
		nextBigText: '&#x3e;&#x3e;',
			currentText: 'днес',
			monthNames: ['Януари','Февруари','Март','Април','Май','Юни',
			'Юли','Август','Септември','Октомври','Ноември','Декември'],
			monthNamesShort: ['Яну','Фев','Мар','Апр','Май','Юни',
			'Юли','Авг','Сеп','Окт','Нов','Дек'],
			dayNames: ['Неделя','Понеделник','Вторник','Сряда','Четвъртък','Петък','Събота'],
			dayNamesShort: ['Нед','Пон','Вто','Сря','Чет','Пет','Съб'],
			dayNamesMin: ['Не','По','Вт','Ср','Че','Пе','Съ'],
		weekHeader: 'Wk',
			dateFormat: 'dd.mm.yy',
		firstDay: 1,
			isRTL: false,
		showMonthAfterYear: false,
		yearSuffix: ''};
		$.datepicker.setDefaults($.datepicker.regional['bg']);
	});
	
	
	// formatting the datepicker to dd.mm.yyyy
	jQuery(function(a){
		$( "#datepicker" ).datepicker({ dateFormat: 'dd.mm.yy', changeYear: true,viewMode: "years", minViewMode: "years"});
	}); 

  </script> {{-- end of datepicker --}}
  
  {{-- tooltip --}}
  <script>
  const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
  const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
</script> {{-- end of tooltip --}}




</body>

</html>
