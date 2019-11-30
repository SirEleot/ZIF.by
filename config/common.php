<?php
    return array(
        /*
        |   base phone numbers 
        */
        'phones'=>array(
            '+375 29 142 09 08',
            '+375 29 242 09 09'
        ),
        /*
        | social
        */
        'social'=>array(
            'vk'=>'https://vk.com/mnogo.zamkof',
            'instagram'=>'https://www.instagram.com/zamki_i_furnitura_soligorsk/?hl=ru'
        ),
        /*
        |   settings for sities
        */
        'sities'=>array(
            'starie_dorogi'=> [
                'name'=>'Старые Дороги', 
                'where'=>'Старых Дорогах', 
                'whom'=>'Стырых Дорог', 
                'phone'=>'+375 29 142 09 08',
                'img'=>'starie_dorogi.png'
            ],
            'minsk'=> [
                'name'=>'Минск', 
                'where'=>'Минске',
                'whom'=>'Минска', 
                'phone'=>'+375 29 669 74 74',
                'img'=>'minsk.png'
            ],
            'slutsk'=> [
                'name'=>'Слуцк', 
                'where'=>'Слуцке',
                'whom'=>'Слуцка', 
                'phone'=>'+375 29 142 09 08',
                'img'=>'slutsk.png'
            ],
            'luban'=> [
                'name'=>'Любань', 
                'where'=>'Любане',
                'whom'=>'Любани', 
                'phone'=>'+375 29 142 09 08',
                'img'=>'luban.png'
            ],
            'kopil'=> [
                'name'=>'Копыль', 
                'where'=>'Копыле',
                'whom'=>'Копыля', 
                'phone'=>'+375 29 142 09 08',
                'img'=>'kopil.png'
            ],
            'soligorsk' => [
                'name'=>'Солигорск', 
                'where'=>'Солигорске',
                'whom'=>'Солигорска', 
                'phone'=>'+375 29 142 09 08',
                'img'=>'soligorsk.png'
            ]
        ),
        /*
        |   contacts
        */
        'adress'=>'г.Солигорск ул. Заслонова 44',
        'yandex'=> array(
            'home'=> '56055262',
            'catalog'=> '56055349'
        ),
        /*
        |   metadata
        */
        'meta'=> array(
            'home'=>[
                'tittle'=> 'Магазин замков и фурнитуры | вскрытие замков',
                'description' => 'Магазин замков и фурнитуры в Солигорске. Оказываем услуги по вскрытию замков. ▶ Мы находимся по адрессу: г.Солигорск ул.Заслонова 44. 📱: +375 29 142 09 08',
                'keywords'=> 'купить, выбор, вскрыть, дверной, дверную, замок, ручку, сердцевину, Солигорске, Солигорск, почтовый ящик'
            ],
            'catalog'=>[
                'tittle'=> 'Магазин замков и фурнитуры в Солигорске',
                'description' => 'Мы предлогаем большой ассортимент замков и дверной фурнитуры по доступным ценам. Гарантия на товар от производителя. 📱: +375 29 142 09 08 ▶ г.Солигорск ул.Заслонова 44.',
                'keywords'=> 'купить, выбор, дверной, дверную, замок, ручку, сердцевину, Солигорске, Солигорск, почтовый ящик'
            ],
            'breaking'=>[
                'tittle'=> 'Вскрытие замков $name, вскрытие авто $name, срочный выезд, открыть дверь',
                'description' => 'Вскрытие замков дверей, сейфов и авто в $where, срочный выезд в район. Вскроем и заменим замок быстро с наименьшими повреждениями. 📱: $phone',
                'keywords'=> 'не открывается, открыть, вскрыть, дверь, замок, авто, сейф, $name, $where, замена, ремонт'
            ]
        ),
        /*
        |   mail settings
        */
        'mail'=>array(
            'order'=>[
                'to'=>'support@zif.by',
                'from'=>'robot@zif.by',
                'name'=>'Новый заказ'
            ],
            'ticket'=>[
                'to'=>'support@zif.by',
                'from'=>'robot@zif.by',
                'name'=>'Консультация'
            ],
            'callback'=>[
                'to'=>'support@zif.by',
                'from'=>'robot@zif.by',
                'name'=>'Перезвонить'
            ]
        )
    )
?>

