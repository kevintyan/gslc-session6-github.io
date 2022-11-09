<?php

namespace App\Models;



class Character
{
    private static $all_characters = [
        [
            'name' => 'Jean',
            'va' => 'SAITO Chiwa',
            'description' => 'She had taken precautions long before the onset of Stormterrors assault, and she will guard Mondstadt with her life as always.',
            'img_url' => 'https://webstatic.hoyoverse.com/upload/uploadstatic/contentweb/20200316/2020031619494241375.png',
            'img_desc_url' => 'https://webstatic.hoyoverse.com/upload/contentweb/2022/07/22/b51565c6f1298e534e90b6e63332e9c1_4240077663550682265.png'
        ],
        [
            'name' => 'Diluc',
            'va' => 'ONO Kenshou',
            'description' => 'As the wealthiest gentleman in Mondstadt, the ever-dapper Diluc always presents himself as the epitome of perfection. But behind the courteous visage burns a zealous soul that has sworn to protect Mondstadt at all costs, allowing him to mercilessly vanquish all who threaten his city.',
            'img_url' => 'https://webstatic.hoyoverse.com/upload/uploadstatic/contentweb/20200316/2020031619504030315.png',
            'img_desc_url' => 'https://webstatic.hoyoverse.com/upload/contentweb/2022/07/22/f5ae62eff2cf426e98626c882dd0cf0d_3240767163310397909.png'
        ],
        [
            'name' => 'Xingqiu',
            'va' => 'MINAGAWA Junko',
            'description' => 'Second son of the Feiyun Commerce Guild, Xingqiu has had a reputation for being studious and polite ever since he was a young child. But there is another side to the mild-mannered Xingqiu everyone knows. A daring, adventurous and much more mischievous side...',
            'img_url' => 'https://webstatic.hoyoverse.com/upload/uploadstatic/contentweb/20200324/2020032418063127277.png',
            'img_desc_url' => 'https://webstatic.hoyoverse.com/upload/contentweb/2022/07/22/4569d28adb1d8fa4394b8d02886abe7a_3572531197847481774.png'
        ],
        [
            'name' => 'Xiangling',
            'va' => 'OZAWA Ari',
            'description' => 'The Head Chef at the Wanmin Restaurant and also a waitress there, Xiangling is extremely passionate about cooking and excels at her signature hot and spicy dishes. Though still young, Xiangling is a true master of the culinary arts with all the skills of a kitchen veteran. She enjoys a good reputation among the hearty eaters at Chihu Rock.',
            'img_url' => 'https://webstatic.hoyoverse.com/upload/uploadstatic/contentweb/20200316/2020031618223919497.png',
            'img_desc_url' => 'https://webstatic.hoyoverse.com/upload/contentweb/2022/07/22/1169862f9fa35734b06ce09c96dad9ae_3683516363976115873.png'
        ]
    ];

    public static function all()
    {
        return collect(self::$all_characters);
    }

    public static function findName($name)
    {
        $characters = static::all();
        return $characters->firstWhere('name', $name);
    }
}
