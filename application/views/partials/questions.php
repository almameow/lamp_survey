<div class="col-xs-6">
	<form action="survey/submit_survey" method="post">
		<div class="form-group">
			<ol>
				<?php
				for($i=0; $i<$count['count']; $i++)
				{
				?>
					<li><?= $all_questions[$i]['question_text'] ?></li>

				<?php
					foreach($all_answers as $one_answer)
					{	
						// Only print current question's corresponding answers
						// ie., if answer's id matches $i+1 print it
						if($one_answer['question_order'] == $i+1)
						{
							// If radio button question
							if($one_answer['type'] == 0)
							{
				?>	
								<!-- <input type="hidden" name="<?= $one_answer['id'] ?>"> -->
								<div class="radio">
									<label>
										<input type="radio" name="<?=$one_answer['id']?>" value="<?= $one_answer['answer_id'] ?>">
										<?=$one_answer['answer_text']?>
									</label>
								</div>
				<?php
							}
							// Else check box question
							else
							{
				?>
								<div class="checkbox">
									<label>
										<input type="checkbox" name="<?=$one_answer['id']?>" value="<?= $one_answer['answer_id'] ?>">
										<?= $one_answer['answer_text'] ?>
									</label>
								</div>
				<?php
							}
						}
					}
				}
				?>
			</ol>
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>