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
        |   triggers for replace in posts
        */
        'postLinks'=>array(
            'shop'=>'<a href="/catalog/0">нашем магазине</a>',
            'breaking'=>'<a href="/vskrytie-zamkov/soligorsk">Наши специалисты</a> '
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
                'keywords'=> ' замок, замок в дверь, большой выбор замков, Apecs, Эльбор, Апекс, дверные ручки, замок врезной, замок навесной'
            ],
            'catalog'=>[
                'tittle'=> 'Магазин замков и фурнитуры в Солигорске',
                'description' => 'Мы предлогаем большой ассортимент замков и дверной фурнитуры по доступным ценам. Гарантия на товар от производителя. 📱: +375 29 142 09 08 ▶ г.Солигорск ул.Заслонова 44.',
                'keywords'=> 'почтовый ящик, купить в Солигорске, купить Солигорск, Apecs, Эльбор, Апекс, дверные ручки, замок врезной, замок навесной'
            ],
            'breaking'=>[
                'tittle'=> 'Вскрытие замков $name | вскрытие авто $name, срочный выезд',
                'description' => 'Вскрытие замков дверей, сейфов и авто в $where, срочный выезд в район. Вскроем и заменим замок быстро с наименьшими повреждениями. 📱: $phone',
                'keywords'=> 'Не открываются двери, заклинил замок, вскрытие замков, вскрытие авто $where, Вскрытие замков $where, вскрытие автомобильных замков, вскрытие сейфов, ремонт замков, замена замков, ремонт замков зажигания, открыть машину, открыть квартиру, сломался ключ'
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

