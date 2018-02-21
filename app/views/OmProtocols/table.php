<?php if(!empty($values)): ?>
    <table class="table table-hover table-sm table-striped">
        <thead>
            <tr>
                <th class="text-center"></th>
                <th class="text-center">Дата</th>
                <th class="text-center">Время</th>
                <th class="text-center">Тип сигнала</th>
                <th class="text-center">Код KKS</th>
                <th class="text-center">Сигнал</th>
                <th class="text-center">Зона</th>
                <th class="text-center">Описание</th>
                <th class="text-center">Значение</th>
                <th class="text-center"></th>
                <th class="text-center"></th>
                <th class="text-center"></th>
            </tr>
        </thead>
        <tbody>
    <?php foreach($values as $row): ?>
        <?php if($row['Stat'] === 'А'): ?>
            <tr class="crash">
        <?php elseif($row['Stat'] === 'П') : ?>
            <tr class="warn">
        <?php elseif($row['Stat'] === 'Ф') : ?>
            <tr class="failure">
        <?php elseif($row['Stat'] === 'С' || $row['Stat'] === 'СС') : ?>
            <tr class="event">
        <?php elseif($row['Stat'] === 'О' || $row['Stat'] === 'В') : ?>
            <tr class="operator">
        <?php elseif($row['Stat'] === 'Н' || $row['Stat'] === 'У') : ?>
            <tr class="malfunction">
        <?php endif; ?>
            <td class="text-center"><?=$row['t1']?></td>
            <td class="text-center"><?=$row['Data']?></td>
            <td class="text-center"><?=$row['Time']?></td>
            <td class="text-center"><?=$row['Stat']?></td>
            <td class="text-center"><?=$row['fb']?></td>
            <td class="text-center"><?=$row['KKS']?></td>
            <td class="text-center"><?=$row['sig']?></td>
            <td class="text-center"><?=$row['text']?></td>
            <td class="text-center"><?=$row['eins']?></td>
            <td class="text-center"><?=$row['t2']?></td>
            <td class="text-center"><?=$row['t3']?></td>
            <td class="text-center"><?=$row['ort']?></td>
        </tr>
    <?php endforeach; ?>
        </tbody>
        <tfoot>
            <tr>
                <td class="text-center">&nbsp;</td>
                <td class="text-center">&nbsp;</td>
                <td class="text-center">&nbsp;</td>
                <td class="text-center">&nbsp;</td>
                <td class="text-center">&nbsp;</td>
                <td class="text-center">&nbsp;</td>
                <td class="text-center">&nbsp;</td>
                <td class="text-center">&nbsp;</td>
                <td class="text-center">&nbsp;</td>
                <td class="text-center">&nbsp;</td>
                <td class="text-center">&nbsp;</td>
                <td class="text-center">&nbsp;</td>
            </tr>
        </tfoot>
    </table>
<?php endif; ?>

<!--<table class="table table-hover table-sm table-striped">
    <thead>
        <tr>
            <th class="text-center"></th>
            <th class="text-center">Дата</th>
            <th class="text-center">Время</th>
            <th class="text-center">Тип сигнала</th>
            <th class="text-center">Код KKS</th>
            <th class="text-center">Сигнал</th>
            <th class="text-center">Зона</th>
            <th class="text-center">Описание</th>
            <th class="text-center">Значение</th>
            <th class="text-center"></th>
            <th class="text-center"></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="text-center">*</td>
            <td class="text-center">06.02.2018</td>
            <td class="text-center">15:02:54.808</td>
            <td class="text-center">Ф</td>
            <td class="text-center">00LCP71AA001</td>
            <td class="text-center">XB01</td>
            <td class="text-center">5</td>
            <td class="text-center">ДВЕРИ ПОМЕЩ УУГ</td>
            <td class="text-center">ОТКРЫТЫ</td>
            <td class="text-center">А</td>
            <td class="text-center">01</td>
        </tr>
        <tr>
            <td class="text-center"></td>
            <td class="text-center">06.02.2018</td>
            <td class="text-center">15:02:54.808</td>
            <td class="text-center">Ф</td>
            <td class="text-center">00LCP71AA001</td>
            <td class="text-center">XB01</td>
            <td class="text-center">5</td>
            <td class="text-center">ДВЕРИ ПОМЕЩ УУГ</td>
            <td class="text-center">[ОТКРЫТЫ]</td>
            <td class="text-center">А</td>
            <td class="text-center">02</td>
        </tr>
        <tr>
            <td class="text-center">*</td>
            <td class="text-center">06.02.2018</td>
            <td class="text-center">15:02:54.808</td>
            <td class="text-center">Ф</td>
            <td class="text-center">00LCP71AA001</td>
            <td class="text-center">XB01</td>
            <td class="text-center">5</td>
            <td class="text-center">ДВЕРИ ПОМЕЩ УУГ</td>
            <td class="text-center">ОТКРЫТЫ</td>
            <td class="text-center">А</td>
            <td class="text-center">03</td>
        </tr>
        <tr>
            <td class="text-center"></td>
            <td class="text-center">06.02.2018</td>
            <td class="text-center">15:02:54.808</td>
            <td class="text-center">Ф</td>
            <td class="text-center">00LCP71AA001</td>
            <td class="text-center">XB01</td>
            <td class="text-center">5</td>
            <td class="text-center">ДВЕРИ ПОМЕЩ УУГ</td>
            <td class="text-center">[ОТКРЫТЫ]</td>
            <td class="text-center">А</td>
            <td class="text-center">04</td>
        </tr>
        <tr>
            <td class="text-center">*</td>
            <td class="text-center">06.02.2018</td>
            <td class="text-center">15:02:54.808</td>
            <td class="text-center">Ф</td>
            <td class="text-center">00LCP71AA001</td>
            <td class="text-center">XB01</td>
            <td class="text-center">5</td>
            <td class="text-center">ДВЕРИ ПОМЕЩ УУГ</td>
            <td class="text-center">ОТКРЫТЫ</td>
            <td class="text-center">А</td>
            <td class="text-center">05</td>
        </tr>
        <tr>
            <td class="text-center">*</td>
            <td class="text-center">06.02.2018</td>
            <td class="text-center">15:02:54.808</td>
            <td class="text-center">Ф</td>
            <td class="text-center">00LCP71AA001</td>
            <td class="text-center">XB01</td>
            <td class="text-center">5</td>
            <td class="text-center">ДВЕРИ ПОМЕЩ УУГ</td>
            <td class="text-center">ОТКРЫТЫ</td>
            <td class="text-center">А</td>
            <td class="text-center">06</td>
        </tr>
        <tr>
            <td class="text-center"></td>
            <td class="text-center">06.02.2018</td>
            <td class="text-center">15:02:54.808</td>
            <td class="text-center">Ф</td>
            <td class="text-center">00LCP71AA001</td>
            <td class="text-center">XB01</td>
            <td class="text-center">5</td>
            <td class="text-center">ДВЕРИ ПОМЕЩ УУГ</td>
            <td class="text-center">[ОТКРЫТЫ]</td>
            <td class="text-center">А</td>
            <td class="text-center">07</td>
        </tr>
        <tr>
            <td class="text-center">*</td>
            <td class="text-center">06.02.2018</td>
            <td class="text-center">15:02:54.808</td>
            <td class="text-center">Ф</td>
            <td class="text-center">00LCP71AA001</td>
            <td class="text-center">XB01</td>
            <td class="text-center">5</td>
            <td class="text-center">ДВЕРИ ПОМЕЩ УУГ</td>
            <td class="text-center">ОТКРЫТЫ</td>
            <td class="text-center">А</td>
            <td class="text-center">08</td>
        </tr>
        <tr>
            <td class="text-center"></td>
            <td class="text-center">06.02.2018</td>
            <td class="text-center">15:02:54.808</td>
            <td class="text-center">Ф</td>
            <td class="text-center">00LCP71AA001</td>
            <td class="text-center">XB01</td>
            <td class="text-center">5</td>
            <td class="text-center">ДВЕРИ ПОМЕЩ УУГ</td>
            <td class="text-center">[ОТКРЫТЫ]</td>
            <td class="text-center">А</td>
            <td class="text-center">09</td>
        </tr>
        <tr>
            <td class="text-center">*</td>
            <td class="text-center">06.02.2018</td>
            <td class="text-center">15:02:54.808</td>
            <td class="text-center">Ф</td>
            <td class="text-center">00LCP71AA001</td>
            <td class="text-center">XB01</td>
            <td class="text-center">5</td>
            <td class="text-center">ДВЕРИ ПОМЕЩ УУГ</td>
            <td class="text-center">ОТКРЫТЫ</td>
            <td class="text-center">А</td>
            <td class="text-center">10</td>
        </tr>
        <tr>
            <td class="text-center">*</td>
            <td class="text-center">06.02.2018</td>
            <td class="text-center">15:02:54.808</td>
            <td class="text-center">Ф</td>
            <td class="text-center">00LCP71AA001</td>
            <td class="text-center">XB01</td>
            <td class="text-center">5</td>
            <td class="text-center">ДВЕРИ ПОМЕЩ УУГ</td>
            <td class="text-center">ОТКРЫТЫ</td>
            <td class="text-center">А</td>
            <td class="text-center">11</td>
        </tr>
        <tr>
            <td class="text-center"></td>
            <td class="text-center">06.02.2018</td>
            <td class="text-center">15:02:54.808</td>
            <td class="text-center">Ф</td>
            <td class="text-center">00LCP71AA001</td>
            <td class="text-center">XB01</td>
            <td class="text-center">5</td>
            <td class="text-center">ДВЕРИ ПОМЕЩ УУГ</td>
            <td class="text-center">[ОТКРЫТЫ]</td>
            <td class="text-center">А</td>
            <td class="text-center">12</td>
        </tr>
        <tr>
            <td class="text-center">*</td>
            <td class="text-center">06.02.2018</td>
            <td class="text-center">15:02:54.808</td>
            <td class="text-center">Ф</td>
            <td class="text-center">00LCP71AA001</td>
            <td class="text-center">XB01</td>
            <td class="text-center">5</td>
            <td class="text-center">ДВЕРИ ПОМЕЩ УУГ</td>
            <td class="text-center">ОТКРЫТЫ</td>
            <td class="text-center">А</td>
            <td class="text-center">13</td>
        </tr>
        <tr>
            <td class="text-center"></td>
            <td class="text-center">06.02.2018</td>
            <td class="text-center">15:02:54.808</td>
            <td class="text-center">Ф</td>
            <td class="text-center">00LCP71AA001</td>
            <td class="text-center">XB01</td>
            <td class="text-center">5</td>
            <td class="text-center">ДВЕРИ ПОМЕЩ УУГ</td>
            <td class="text-center">[ОТКРЫТЫ]</td>
            <td class="text-center">А</td>
            <td class="text-center">14</td>
        </tr>
        <tr>
            <td class="text-center">*</td>
            <td class="text-center">06.02.2018</td>
            <td class="text-center">15:02:54.808</td>
            <td class="text-center">Ф</td>
            <td class="text-center">00LCP71AA001</td>
            <td class="text-center">XB01</td>
            <td class="text-center">5</td>
            <td class="text-center">ДВЕРИ ПОМЕЩ УУГ</td>
            <td class="text-center">ОТКРЫТЫ</td>
            <td class="text-center">А</td>
            <td class="text-center">15</td>
        </tr>
        <tr>
            <td class="text-center">*</td>
            <td class="text-center">06.02.2018</td>
            <td class="text-center">15:02:54.808</td>
            <td class="text-center">Ф</td>
            <td class="text-center">00LCP71AA001</td>
            <td class="text-center">XB01</td>
            <td class="text-center">5</td>
            <td class="text-center">ДВЕРИ ПОМЕЩ УУГ</td>
            <td class="text-center">ОТКРЫТЫ</td>
            <td class="text-center">А</td>
            <td class="text-center">16</td>
        </tr>
        <tr>
            <td class="text-center"></td>
            <td class="text-center">06.02.2018</td>
            <td class="text-center">15:02:54.808</td>
            <td class="text-center">Ф</td>
            <td class="text-center">00LCP71AA001</td>
            <td class="text-center">XB01</td>
            <td class="text-center">5</td>
            <td class="text-center">ДВЕРИ ПОМЕЩ УУГ</td>
            <td class="text-center">[ОТКРЫТЫ]</td>
            <td class="text-center">А</td>
            <td class="text-center">17</td>
        </tr>
        <tr>
            <td class="text-center">*</td>
            <td class="text-center">06.02.2018</td>
            <td class="text-center">15:02:54.808</td>
            <td class="text-center">Ф</td>
            <td class="text-center">00LCP71AA001</td>
            <td class="text-center">XB01</td>
            <td class="text-center">5</td>
            <td class="text-center">ДВЕРИ ПОМЕЩ УУГ</td>
            <td class="text-center">ОТКРЫТЫ</td>
            <td class="text-center">А</td>
            <td class="text-center">18</td>
        </tr>
        <tr>
            <td class="text-center"></td>
            <td class="text-center">06.02.2018</td>
            <td class="text-center">15:02:54.808</td>
            <td class="text-center">Ф</td>
            <td class="text-center">00LCP71AA001</td>
            <td class="text-center">XB01</td>
            <td class="text-center">5</td>
            <td class="text-center">ДВЕРИ ПОМЕЩ УУГ</td>
            <td class="text-center">[ОТКРЫТЫ]</td>
            <td class="text-center">А</td>
            <td class="text-center">19</td>
        </tr>
        <tr>
            <td class="text-center">*</td>
            <td class="text-center">06.02.2018</td>
            <td class="text-center">15:02:54.808</td>
            <td class="text-center">Ф</td>
            <td class="text-center">00LCP71AA001</td>
            <td class="text-center">XB01</td>
            <td class="text-center">5</td>
            <td class="text-center">ДВЕРИ ПОМЕЩ УУГ</td>
            <td class="text-center">ОТКРЫТЫ</td>
            <td class="text-center">А</td>
            <td class="text-center">20</td>
        </tr>
        <tr>
            <td class="text-center">*</td>
            <td class="text-center">06.02.2018</td>
            <td class="text-center">15:02:54.808</td>
            <td class="text-center">Ф</td>
            <td class="text-center">00LCP71AA001</td>
            <td class="text-center">XB01</td>
            <td class="text-center">5</td>
            <td class="text-center">ДВЕРИ ПОМЕЩ УУГ</td>
            <td class="text-center">ОТКРЫТЫ</td>
            <td class="text-center">А</td>
            <td class="text-center">21</td>
        </tr>
        <tr>
            <td class="text-center"></td>
            <td class="text-center">06.02.2018</td>
            <td class="text-center">15:02:54.808</td>
            <td class="text-center">Ф</td>
            <td class="text-center">00LCP71AA001</td>
            <td class="text-center">XB01</td>
            <td class="text-center">5</td>
            <td class="text-center">ДВЕРИ ПОМЕЩ УУГ</td>
            <td class="text-center">[ОТКРЫТЫ]</td>
            <td class="text-center">А</td>
            <td class="text-center">22</td>
        </tr>
        <tr>
            <td class="text-center">*</td>
            <td class="text-center">06.02.2018</td>
            <td class="text-center">15:02:54.808</td>
            <td class="text-center">Ф</td>
            <td class="text-center">00LCP71AA001</td>
            <td class="text-center">XB01</td>
            <td class="text-center">5</td>
            <td class="text-center">ДВЕРИ ПОМЕЩ УУГ</td>
            <td class="text-center">ОТКРЫТЫ</td>
            <td class="text-center">А</td>
            <td class="text-center">23</td>
        </tr>
        <tr>
            <td class="text-center"></td>
            <td class="text-center">06.02.2018</td>
            <td class="text-center">15:02:54.808</td>
            <td class="text-center">Ф</td>
            <td class="text-center">00LCP71AA001</td>
            <td class="text-center">XB01</td>
            <td class="text-center">5</td>
            <td class="text-center">ДВЕРИ ПОМЕЩ УУГ</td>
            <td class="text-center">[ОТКРЫТЫ]</td>
            <td class="text-center">А</td>
            <td class="text-center">24</td>
        </tr>
        <tr>
            <td class="text-center">*</td>
            <td class="text-center">06.02.2018</td>
            <td class="text-center">15:02:54.808</td>
            <td class="text-center">Ф</td>
            <td class="text-center">00LCP71AA001</td>
            <td class="text-center">XB01</td>
            <td class="text-center">5</td>
            <td class="text-center">ДВЕРИ ПОМЕЩ УУГ</td>
            <td class="text-center">ОТКРЫТЫ</td>
            <td class="text-center">А</td>
            <td class="text-center">25</td>
        </tr>
    </tbody>
    <tfoot>
        <tr>
            <td class="text-center">01</td>
            <td class="text-center">02</td>
            <td class="text-center">03</td>
            <td class="text-center">04</td>
            <td class="text-center">05</td>
            <td class="text-center">06</td>
            <td class="text-center">07</td>
            <td class="text-center">08</td>
            <td class="text-center">09</td>
            <td class="text-center">10</td>
            <td class="text-center">11</td>
        </tr>
    </tfoot>
</table>
<nav aria-label="Pagination">
    <ul class="pagination pagination-sm justify-content-center">
        <li class="page-item disabled"><a href="" class="page-link">&laquo;</a></li>
        <li class="page-item disabled"><a href="" class="page-link">-100</a></li>
        <li class="page-item disabled"><a href="" class="page-link">-10</a></li>
        <li class="page-item disabled"><a href="" class="page-link">-1</a></li>
        <li class="page-item active"><a href="" class="page-link">1</a></li>
        <li class="page-item"><a href="" class="page-link">+1</a></li>
        <li class="page-item"><a href="" class="page-link">+10</a></li>
        <li class="page-item"><a href="" class="page-link">+100</a></li>
        <li class="page-item"><a href="" class="page-link">&raquo;</a></li>
    </ul>
</nav>-->