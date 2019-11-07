<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="colorlib.com">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="<?php echo asset('Template/fonts/material-icon/css/material-design-iconic-font.min.css')?>" type="text/css">

    <!-- Main css -->
    <link rel="stylesheet" href="<?php echo asset('Template/css/style.css')?>" type="text/css">

    <script type="text/javascript">
        function validMaskContactPhone(contact_phone){
            if(contact_phone.value.length == 0)
                contact_phone.value = '(' + contact_phone.value;
            if(contact_phone.value.length == 3)
                contact_phone.value = contact_phone.value + ') ';

            if(contact_phone.value.length == 8)
                contact_phone.value = contact_phone.value + '-';
        }
    </script>
    <script type="text/javascript">
        function validMaskCellPhone(cell_phone){
            if(cell_phone.value.length == 0)
                cell_phone.value = '(' + cell_phone.value;
            if(cell_phone.value.length == 3)
                cell_phone.value = cell_phone.value + ') ';

            if(cell_phone.value.length == 9)
                cell_phone.value = cell_phone.value + '-';
        }
    </script>

</head>
<body>

<div class="main">

    <div class="container">
        <h2>Inscreva-se</h2>
        <form method="POST" action="{{route('passo1.store')}}"  id="signup-form" class="signup-form" enctype="multipart/form-data">
            <h3>
                Passo 1
            </h3>
            <fieldset>
                {{ csrf_field() }}
                <div class="form-row">
                    <div class="form-group-flex">
                        <div class="form-group">
                            <input type="text" name="complete_name" id="complete_name" placeholder="Nome Completo" />
                        </div>
                        <div class="form-group">
                            <label>Favor inserir Data de Nascimento: </label>
                            <input type="date" name="birth" id="birth" placeholder="Data de Nascimento" />
                        </div>
                    </div>
                </div>
            </fieldset>
            <button type="submit">Click Me!</button>

            <h3>
                Passo 2
            </h3>
            <fieldset>
                <div class="form-row">
                    <div class="form-group-flex">
                        <div class="form-group">
                            <input type="text" name="address" id="address" placeholder="Endereco" />
                        </div>
                        <div class="form-row form-input-flex">
                            <div class="form-input">
                                <input type="text" name="city" id="city" placeholder="Cidade" />
                            </div>
                            <div class="form-group">
                                <select name="country" id="country">
                                    <option value="Brasil">Brasil</option>
                                    <option value="USA">USA</option>
                                </select>
                                <span class="select-icon"><i class="zmdi zmdi-caret-down"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>

            <h3>
                Passo 3
            </h3>
            <fieldset>
                <div class="form-group-flex">
                    <div class="form-input">
                        <input type="text" name="contact_phone" id="contact_phone" size="20" maxlength="14" placeholder="Telefone Fixo" onkeypress="validMaskContactPhone(this)"/>
                    </div>
                    <div class="form-input">
                        <input type="text" name="cell_phone" id="cell_phone" size="20" maxlength="15" placeholder="Telefone Celular" onkeypress="validMaskCellPhone(this)" />
                    </div>
                </div>
            </fieldset>
        </form>
    </div>

</div>

<!-- JS -->
<script type="text/javascript" src="<?php echo asset('Template/vendor/jquery/jquery.min.js')?>"></script>
<script type="text/javascript" src="<?php echo asset('Template/vendor/jquery-validation/dist/jquery.validate.min.js')?>"></script>
<script type="text/javascript" src="<?php echo asset('Template/vendor/jquery-validation/dist/additional-methods.min.js')?>"></script>
<script type="text/javascript" src="<?php echo asset('Template/vendor/jquery-steps/jquery.steps.min.js')?>"></script>
<script type="text/javascript" src="<?php echo asset('Template/js/main.js')?>"></script>
</body>
</html>
