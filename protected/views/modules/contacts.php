<?php $model=new ContactForm; ?>
<section id="contacts" class="bg-red page">	
    <div class="row-fluid">

        <div class="page-data">
            
            <div class="offset3 span6 inner">
                
                <div class="row-fluid contact-form">
                    
                    <h2>Contact Me</h2>
                    
                    <?php $form=$this->beginWidget('CActiveForm', array(
                        'action'=>array('/site/contact'),
                        'id'=>'contact-form',
                        'enableAjaxValidation' => true,
                        'enableClientValidation' => true,
                        'method' => 'post',
                        'clientOptions' => array(
                            'validateOnSubmit' => true,
                            'validateOnChange' => true,
                            'afterValidate' => 'js:function (form, data, hasError) {
                                if (!hasError)
                                    send(data);
                                else
                                    return false;
                            }',
                        ),
                    )); ?>
                    
                    <?php echo $form->errorSummary($model); ?>
                        
                    <div class="row-fluid">
                        
                        <div class="span6">
                            <?php echo $form->labelEx($model,'name'); ?>
                            <?php echo $form->textField($model,'name'); ?>
                            <?php echo $form->error($model,'name'); ?>
                        </div>
                        
                        <div class="span6">
                            <?php echo $form->labelEx($model,'email'); ?>
                            <?php echo $form->textField($model,'email'); ?>
                            <?php echo $form->error($model,'email'); ?>
                        </div>
                        
                    </div>

                    <div class="row-fluid">
                        
                        <div class="span6">
                            <?php echo $form->labelEx($model,'subject'); ?>
                            <?php echo $form->textField($model,'subject',array('size'=>60,'maxlength'=>128)); ?>
                            <?php echo $form->error($model,'subject'); ?>
                        </div>
                        
                        <div class="span6">
                            <?php echo $form->labelEx($model,'body'); ?>
                            <?php echo $form->textArea($model,'body',array('rows'=>6, 'cols'=>50)); ?>
                            <?php echo $form->error($model,'body'); ?>
                        </div>
                        
                    </div>
                        
                    <?php if(CCaptcha::checkRequirements()): ?>

                    <div class="row-fluid">

                        <div class="span6">
                            <?php $this->widget('CCaptcha'); ?>
                        </div>
                        
                        <div class="span6">
                            <?php echo $form->labelEx($model,'verifyCode'); ?>
                            <?php echo $form->textField($model,'verifyCode'); ?>
                            <?php echo $form->error($model,'verifyCode'); ?>
                        </div>
                        
                    </div>
                    <?php endif; ?>
                    
                    <div class="row-fluid">
                        
                        <div class="span6 buttons">
                            <?php echo CHtml::submitButton('Submit'); ?>
                        </div>
                        
                    </div>
                    
                    <?php $this->endWidget(); ?>

                </div>
                
                <div class="row-fluid contact-result offset3" style="display: none;">
                    
                    <span class="label label-success">
                        Message has been successfully sent!
                    </span>
                    
                </div>

            </div>
            
        </div>

    </div>

</section>

<script>
    function send(data)
    {        
        $.ajax({
            type: 'POST',
            url: '<?php echo Yii::app()->createAbsoluteUrl('/site/contact'); ?>',
            data: data,
            success: function (data) {
                $(".contact-form").fadeOut(400);
                $(".contact-result").fadeIn(400);
            },
            error: function (data) {
                alert("error");
                alert(data);
            },
            dataType: 'html'
        });
    }
</script>