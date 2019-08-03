<?php $v->layout("_theme"); ?>
<section class="container-fluid">
    <div class="my-cont-content d-flex justify-content-center">
        <div class="big-box">
            <div class="big-box-inside">
                <div class="agendar-tittle"> 
                    Agende aqui sua consulta
                </div>
                <div class="form">
                    <form action="<?= url("/cadastrar"); ?>" method="POST" enctype="multipart/form-data" >
                        <div class="d-flex justify-content-around">
                            <div class="form-left">
                                <div class="form-name">CPF</div>
                                <input type="number"><br>
                                <div class="form-name">Nome</div>
                                <input type="text"><br>
                            </div> 
                            <div class="form-right">
                                <div class="form-name">Data</div>
                                <input type="date">
                                <div class="form-name">Hora</div>
                                <select name="" id="">
                                    <option value="">10 am</option>
                                    <option value="">11 am</option>
                                    <option value="">12 am</option>
                                </select><br>
                            </div>                            
                        </div>
                        <div class="col-6 d-flex justify-content-center">
                            <input type="submit" value="Agendar"> 
                        </div>                   
                            
                    </form>
                </div>
            </div>
            
        </div>    
    </div>
    <div class="my-cont-content d-flex">
        <div class="box-hour">
            <div class="box-hour-content">
                <div class="box-hour-tittle">
                    Horários de atendimento
                </div>
                <div class="box-hour-text">
                    De Segunda a Sexta-Feira as  07h as 20h
                </div>
                <div class="box-hour-tittle">
                    Email:
                </div>
                <div class="box-hour-text">
                    ortodontia@example.com
                </div>
                <div class="box-hour-tittle">
                    Tel:
                </div>
                <div class="box-hour-text">
                    +55 (99) 9999-9999
                </div>
            </div>
        </div>
    </div>
</section>	



	<!-- Background component	 -->	
	<div class="rgb0">
		<div class="imgbg04">
			<div class="rgb1"></div>
		</div>	
	</div>
    <!-- Background component    -->