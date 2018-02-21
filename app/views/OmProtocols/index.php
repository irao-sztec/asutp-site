<h1>Протоколы OM-650</h1>

<form action="<?=SITE?>/om-protocols/table" class="form" method="post">
    <div class="row justify-content-center">
        <div class="col-3">
            <div class="card">
                <div class="card-header">Объект:</div>
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="object" id="unit0" value="unit0" checked>
                                <label class="form-check-label" for="unit0">
                                    ОВС
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="object" id="unit1" value="unit1">
                                <label class="form-check-label" for="unit1">
                                    Энергоблок №1
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="object" id="unit2" value="unit2">
                                <label class="form-check-label" for="unit2">
                                    Энергоблок №2
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-9">
            <div class="card">
                <div class="card-header">Интервал времени:</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col align-self-center">
                            <h3 class="text-right font-weight-bold">От: </h3>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="day">День</label>
                                <input type="number" name="fromDay" class="form-control font-weight-bold text-center" maxlength="2" min="1" max="31" id="day" value="<?=$curdate['mday']?>">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="month">Месяц</label>
                                <input type="number" name="fromMonth" class="form-control font-weight-bold text-center" maxlength="2" min="1" max="12" id="month" value="<?=$curdate['mon']?>">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="year">Год</label>
                                <input type="number" name="fromYear" class="form-control font-weight-bold text-center" maxlength="4" min="2012" max="<?=$curdate['year']?>" id="year" value="<?=$curdate['year']?>">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="hour">Час</label>
                                <input type="number" name="fromHour" class="form-control font-weight-bold text-center" maxlength="2" min="0" max="23" id="hour" value="<?php echo $curdate['hours'] - 1;?>">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="minute">Минута</label>
                                <input type="number" name="fromMinute" class="form-control font-weight-bold text-center" maxlength="2" min="0" max="59" id="minute" value="0">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="second">Секунда</label>
                                <input type="number" name="fromSecond" class="form-control font-weight-bold text-center" maxlength="2" min="0" max="59" id="second" value="0">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col align-self-center">
                            <h3 class="text-right font-weight-bold">До: </h3>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="day">День</label>
                                <input type="number" name="beforeDay" class="form-control font-weight-bold text-center" maxlength="2" min="1" max="31" id="day" value="<?=$curdate['mday']?>">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="month">Месяц</label>
                                <input type="number" name="beforeMonth" class="form-control font-weight-bold text-center" maxlength="2" min="1" max="12" id="month" value="<?=$curdate['mon']?>">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="year">Год</label>
                                <input type="number" name="beforeYear" class="form-control font-weight-bold text-center" maxlength="" min="2015" max="2018" id="year" value="<?=$curdate['year']?>">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="hour">Час</label>
                                <input type="number" name="beforeHour" class="form-control font-weight-bold text-center" maxlength="2" min="0" max="23" id="hour" value="<?=$curdate['hours']?>">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="minute">Минута</label>
                                <input type="number" name="beforeMinute" class="form-control font-weight-bold text-center" maxlength="2" min="0" max="59" id="minute" value="0">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="second">Секунда</label>
                                <input type="number" name="beforeSecond" class="form-control font-weight-bold text-center" maxlength="2" min="0" max="59" id="second" value="0">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-7">
                            <div class="form-group row">
                                <label for="kks_code" class="col-3 col-form-label text-right">Код KKS:</label>
                                <div class="col-9">
                                    <input type="text" class="form-control" id="kks_code" maxlength="13" placeholder="Код KKS">
                                </div>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="form-group row">
                                <label for="signal" class="col-4 col-form-label text-right">Сигнал:</label>
                                <div class="col-8">
                                    <input type="text" class="form-control" id="signal" maxlength="4" placeholder="Сигнал">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-7">
                            <div class="form-group row">
                                <label for="text" class="col-3 col-form-label text-right">Текст:</label>
                                <div class="col-9">
                                    <input type="text" class="form-control" id="text" placeholder="Текст">
                                </div>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="form-group row">
                                <label for="setting" class="col-4 col-form-label text-right">Уставка:</label>
                                <div class="col-8">
                                    <input type="text" class="form-control" id="setting" placeholder="Уставка">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-7" id="u0_fz">
            <div class="card">
                <div class="card-header">Функциональная зона:</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-check text-right">
                                <label class="form-check-label mr-4" for="u0_fz01">
                                    01 - Теплофикация
                                </label>
                                <input class="form-check-input u0_fz_cb" type="checkbox" name="u0_fz01" value="1" id="u0_fz01" checked>
                            </div>
                            <div class="form-check text-right">
                                <label class="form-check-label mr-4" for="u0_fz04">
                                    04 - Техническая вода
                                </label>
                                <input class="form-check-input u0_fz_cb" type="checkbox" name="u0_fz04" value="4" id="u0_fz04" checked>
                            </div>
                            <div class="form-check text-right">
                                <label class="form-check-label mr-4" for="u0_fz07">
                                    07 - Испарительная установка
                                </label>
                                <input class="form-check-input u0_fz_cb" type="checkbox" name="u0_fz07" value="7" id="u0_fz07" checked>
                            </div>
                            <div class="form-check text-right">
                                <label class="form-check-label mr-4" for="u0_fz18">
                                    18 - Жидкое топливо
                                </label>
                                <input class="form-check-input u0_fz_cb" type="checkbox" name="u0_fz18" value="18" id="u0_fz18" checked>
                            </div>
                            <div class="form-check text-right">
                                <label class="form-check-label mr-4" for="u0_fz32">
                                    32 - Паровая котельная
                                </label>
                                <input class="form-check-input u0_fz_cb" type="checkbox" name="u0_fz32" value="32" id="u0_fz32" checked>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input u0_fz_cb" type="checkbox" name="u0_fz10" value="10" id="u0_fz10" checked>
                                <label class="form-check-label" for="u0_fz10">
                                    10 - ОРУ
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input u0_fz_cb" type="checkbox" name="u0_fz15" value="15" id="u0_fz15" checked>
                                <label class="form-check-label" for="u0_fz15">
                                    15 - Собственные нужды
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input u0_fz_cb" type="checkbox" name="u0_fz25" value="25" id="u0_fz25" checked>
                                <label class="form-check-label" for="u0_fz25">
                                    25 - Трансформатор
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input u0_fz_cb" type="checkbox" name="u0_fz50" value="50" id="u0_fz50" checked>
                                <label class="form-check-label" for="u0_fz50">
                                    50 - OM-650
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input u0_fz_cb" type="checkbox" name="u0_fz98" value="98" id="u0_fz98" checked>
                                <label class="form-check-label" for="u0_fz98">
                                    98 - Common System
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-4 offset-1">
                            <button type="button" class="btn btn-success col-12" id="u0_check_all"><span class="fa  fa-check-square-o"></span> Всё</button>
                        </div>
                        <div class="col-4 offset-2">
                            <button type="button" class="btn btn-danger col-12" id="u0_check_none"><span class="fa fa-square-o"></span> Сброс</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-7 d-none" id="u1_fz">
            <div class="card">
                <div class="card-header">Функциональная зона:</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-check text-right">
                                <label class="form-check-label mr-4" for="u1_fz01">
                                    01 - Энергоблок №1
                                </label>
                                <input class="form-check-input u1_fz_cb" type="checkbox" name="u1_fz01" value="1" id="u1_fz01">
                            </div>
                            <div class="form-check text-right">
                                <label class="form-check-label mr-4" for="u1_fz02">
                                    02 - Газовая турбина 11
                                </label>
                                <input class="form-check-input u1_fz_cb" type="checkbox" name="u1_fz02" value="2" id="u1_fz02">
                            </div>
                            <div class="form-check text-right">
                                <label class="form-check-label mr-4" for="u1_fz03">
                                    03 - Газовая турбина 12
                                </label>
                                <input class="form-check-input u1_fz_cb" type="checkbox" name="u1_fz03" value="3" id="u1_fz03">
                            </div>
                            <div class="form-check text-right">
                                <label class="form-check-label mr-4" for="u1_fz04">
                                    04 - Паровая турбина
                                </label>
                                <input class="form-check-input u1_fz_cb" type="checkbox" name="u1_fz04" value="4" id="u1_fz04">
                            </div>
                            <div class="form-check text-right">
                                <label class="form-check-label mr-4" for="u1_fz05">
                                    05 - Конденсатный тракт
                                </label>
                                <input class="form-check-input u1_fz_cb" type="checkbox" name="u1_fz05" value="5" id="u1_fz05">
                            </div>
                            <div class="form-check text-right">
                                <label class="form-check-label mr-4" for="u1_fz06">
                                    06 - Котёл-утилизатор 11
                                </label>
                                <input class="form-check-input u1_fz_cb" type="checkbox" name="u1_fz06" value="6" id="u1_fz06">
                            </div>
                            <div class="form-check text-right">
                                <label class="form-check-label mr-4" for="u1_fz07">
                                    07 - Котёл-утилизатор 12
                                </label>
                                <input class="form-check-input u1_fz_cb" type="checkbox" name="u1_fz07" value="7" id="u1_fz07">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input u1_fz_cb" type="checkbox" name="u1_fz08" value="8" id="u1_fz08">
                                <label class="form-check-label" for="u1_fz08">
                                    08 - Теплофикация
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input u1_fz_cb" type="checkbox" name="u1_fz09" value="9" id="u1_fz09">
                                <label class="form-check-label" for="u1_fz09">
                                    09 - Электричество блока
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input u1_fz_cb" type="checkbox" name="u1_fz10" value="10" id="u1_fz10">
                                <label class="form-check-label" for="u1_fz10">
                                    10 - Генератор ГТ-11
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input u1_fz_cb" type="checkbox" name="u1_fz11" value="11" id="u1_fz11">
                                <label class="form-check-label" for="u1_fz11">
                                    11 - Генератор ГТ-12
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input u1_fz_cb" type="checkbox" name="u1_fz12" value="12" id="u1_fz12">
                                <label class="form-check-label" for="u1_fz12">
                                    12 - Генератор ПТ
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input u1_fz_cb" type="checkbox" name="u1_fz50" value="50" id="u1_fz50">
                                <label class="form-check-label" for="u1_fz50">
                                    50 - OM-650
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input u1_fz_cb" type="checkbox" name="u1_fz98" value="98" id="u1_fz98">
                                <label class="form-check-label" for="u1_fz98">
                                    98 - Common System
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-4 offset-1">
                            <button type="button" class="btn btn-success col-12" id="u1_check_all"><span class="fa  fa-check-square-o"></span> Всё</button>
                        </div>
                        <div class="col-4 offset-2">
                            <button type="button" class="btn btn-danger col-12" id="u1_check_none"><span class="fa fa-square-o"></span> Сброс</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-7 d-none" id="u2_fz">
            <div class="card">
                <div class="card-header">Функциональная зона:</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-check text-right">
                                <label class="form-check-label mr-4" for="u2_fz01">
                                    01 - Энергоблок №2
                                </label>
                                <input class="form-check-input u2_fz_cb" type="checkbox" name="u2_fz01" id="u2_fz01" value="1">
                            </div>
                            <div class="form-check text-right">
                                <label class="form-check-label mr-4" for="u2_fz02">
                                    02 - Газовая турбина 21
                                </label>
                                <input class="form-check-input u2_fz_cb" type="checkbox" name="u2_fz02" id="u2_fz02" value="2">
                            </div>
                            <div class="form-check text-right">
                                <label class="form-check-label mr-4" for="u2_fz03">
                                    03 - Газовая турбина 22
                                </label>
                                <input class="form-check-input u2_fz_cb" type="checkbox" name="u2_fz03" id="u2_fz03" value="3">
                            </div>
                            <div class="form-check text-right">
                                <label class="form-check-label mr-4" for="u2_fz04">
                                    04 - Паровая турбина
                                </label>
                                <input class="form-check-input u2_fz_cb" type="checkbox" name="u2_fz04" id="u2_fz04" value="4">
                            </div>
                            <div class="form-check text-right">
                                <label class="form-check-label mr-4" for="u2_fz05">
                                    05 - Конденсатный тракт
                                </label>
                                <input class="form-check-input u2_fz_cb" type="checkbox" name="u2_fz05" id="u2_fz05" value="5">
                            </div>
                            <div class="form-check text-right">
                                <label class="form-check-label mr-4" for="u2_fz06">
                                    06 - Котёл-утилизатор 21
                                </label>
                                <input class="form-check-input u2_fz_cb" type="checkbox" name="u2_fz06" id="u2_fz06" value="6">
                            </div>
                            <div class="form-check text-right">
                                <label class="form-check-label mr-4" for="u2_fz07">
                                    07 - Котёл-утилизатор 22
                                </label>
                                <input class="form-check-input u2_fz_cb" type="checkbox" name="u2_fz07" id="u2_fz07" value="7">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input u2_fz_cb" type="checkbox" name="u2_fz08" id="u2_fz08" value="8">
                                <label class="form-check-label" for="u2_fz08">
                                    08 - Теплофикация
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input u2_fz_cb" type="checkbox" name="u2_fz09" id="u2_fz09" value="9">
                                <label class="form-check-label" for="u2_fz09">
                                    09 - Электричество блока
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input u2_fz_cb" type="checkbox" name="u2_fz10" id="u2_fz10" value="10">
                                <label class="form-check-label" for="u2_fz10">
                                    10 - Генератор ГТ-21
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input u2_fz_cb" type="checkbox" name="u2_fz11" id="u2_fz11" value="11">
                                <label class="form-check-label" for="u2_fz11">
                                    11 - Генератор ГТ-22
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input u2_fz_cb" type="checkbox" name="u2_fz12" id="u2_fz12" value="12">
                                <label class="form-check-label" for="u2_fz12">
                                    12 - Генератор ПТ
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input u2_fz_cb" type="checkbox" name="u2_fz50" id="u2_fz50" value="50">
                                <label class="form-check-label" for="u2_fz50">
                                    50 - OM-650
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input u2_fz_cb" type="checkbox" name="u2_fz98" id="u2_fz98" value="98">
                                <label class="form-check-label" for="u2_fz98">
                                    98 - Common System
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-4 offset-1">
                            <button type="button" class="btn btn-success col-12" id="u2_check_all"><span class="fa  fa-check-square-o"></span> Всё</button>
                        </div>
                        <div class="col-4 offset-2">
                            <button type="button" class="btn btn-danger col-12" id="u2_check_none"><span class="fa fa-square-o"></span> Сброс</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-5">
            <div class="card">
                <div class="card-header">Тип сигнала:</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div class="form-check">
                                <input class="form-check-input signal_cb" type="checkbox" name="type_a" value="А" checked>
                                <label class="form-check-label" for="type_a">
                                    А - Аварийная сигнализация
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input signal_cb" type="checkbox" name="type_p" value="П" checked>
                                <label class="form-check-label" for="type_p">
                                    П - Предупредительная сигнализация
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input signal_cb" type="checkbox" name="type_f" value="Ф" checked>
                                <label class="form-check-label" for="type_f">
                                    Ф - Функциональный отказ
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input signal_cb" type="checkbox" name="type_s" value="С" checked>
                                <label class="form-check-label" for="type_s">
                                    С - событие
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input signal_cb" type="checkbox" name="type_ss" value="СС" checked>
                                <label class="form-check-label" for="type_ss">
                                    СС - Изменение состояния
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input signal_cb" type="checkbox" name="type_o" value="О" checked>
                                <label class="form-check-label" for="type_o">
                                    О - Действие оператора
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input signal_cb" type="checkbox" name="type_b" value="В" checked>
                                <label class="form-check-label" for="type_b">
                                    В - Приведение в соответствие
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input signal_cb" type="checkbox" name="type_n" value="Н" checked>
                                <label class="form-check-label" for="type_n">
                                    Н - Неисправность TME или OM
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input signal_cb" type="checkbox" name="type_u" value="У" checked>
                                <label class="form-check-label" for="type_u">
                                    У - Неисправность TME
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-5 offset-1">
                            <button type="button" class="btn btn-success col-12" id="signal_check_all"><span class="fa  fa-check-square-o"></span> Всё</button>
                        </div>
                        <div class="col-5">
                            <button type="button" class="btn btn-danger col-12" id="signal_check_none"><span class="fa fa-square-o"></span> Сброс</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-3 offset-2">
                            <a href="<?=SITE?>/om-protocols/help" class="btn btn-lg btn-info col-12"><span class="fa  fa-question-circle-o"></span> Помощь</a>
                        </div>
                        <div class="col-3 offset-2">
                            <button type="submit" class="btn btn-lg btn-success col-12"><span class="fa fa-list"></span> OK</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<script>
    $(document).ready(function() {
        /**
         * При переключении в поле "Объект" меняются
         * элементы в поле "Функциональная зона"
         */
        $('#unit0').click(function() {
            $('#u0_fz').removeClass('d-none');
            $('#u1_fz').addClass('d-none');
            $('#u2_fz').addClass('d-none');
            $('.u0_fz_cb').prop('checked', true);
            $('.u1_fz_cb').prop('checked', false);
            $('.u2_fz_cb').prop('checked', false);
        });
        $('#unit1').click(function() {
            $('#u0_fz').addClass('d-none');
            $('#u1_fz').removeClass('d-none');
            $('#u2_fz').addClass('d-none');
            $('.u0_fz_cb').prop('checked', false);
            $('.u1_fz_cb').prop('checked', true);
            $('.u2_fz_cb').prop('checked', false);
        });
        $('#unit2').click(function() {
            $('#u0_fz').addClass('d-none');
            $('#u1_fz').addClass('d-none');
            $('#u2_fz').removeClass('d-none');
            $('.u0_fz_cb').prop('checked', false);
            $('.u1_fz_cb').prop('checked', false);
            $('.u2_fz_cb').prop('checked', true);
        });

        /**
         * При нажатии кнопки "Всё" в поле "Функциональная зона"
         * устанавливаются флажки во все Checkbox'ы
         */
        $('#u0_check_all').click(function() {
            $('.u0_fz_cb').prop('checked', true);
        });
        $('#u1_check_all').click(function() {
            $('.u1_fz_cb').prop('checked', true);
        });
        $('#u2_check_all').click(function() {
            $('.u2_fz_cb').prop('checked', true);
        });

        /**
         * При нажатии кнопки "Сброс" в поле "Функциональная зона"
         * сбрасываются все флажки всех Checkbox'ов
         */
        $('#u0_check_none').click(function() {
            $('.u0_fz_cb').prop('checked', false);
        });
        $('#u1_check_none').click(function() {
            $('.u1_fz_cb').prop('checked', false);
        });
        $('#u2_check_none').click(function() {
            $('.u2_fz_cb').prop('checked', false);
        });

        /**
         * Кнопки "Всё" и "Сброс" устанавливают/сбрасывают все
         * флажки у Checkbox'ов в поле "Тип сигнала"
         */
        $('#signal_check_all').click(function() {
            $('.signal_cb').prop('checked', true);
        });
        $('#signal_check_none').click(function() {
            $('.signal_cb').prop('checked', false);
        });

        /**
         * Валидация и отправка формы, по нажатию кнопки "OK"
         * !!! Возможно не понадобится !!!
         */
        //TODO: Сделать валидацию форм, если необходимо. Подготовить данные для отправки
        /*$('input["submit"]').click(function() {

        });*/
    });
</script>