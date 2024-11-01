<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        DB::table('studies')->insert([
            'title' => 'JavaScript-разработчик',
            'department' => 'Кафедра JavaScript-разработки',
            'description' => 'Узнай всё о мире фронтенда',
            'image' => 'JS-study.png',
            'category_id' => 1,
        ]);
        DB::table('studies')->insert([
            'title' => 'Python-Разработчик',
            'description' => 'Узнай всё о мире бэкэнда и ботоводства',
            'image' => 'Py-study.png',
            'category_id' => 1,
        ]);
        DB::table('studies')->insert([
            'title' => 'Unity-разработчик',
            'department' => 'Кафедра Unity-разработки',
            'description' => 'Выучи язык разработки Microsoft и погрузить в объектоно-ориентированное программирование',
            'image' => 'Unity-study.png',
            'category_id' => 1,
        ]);
        DB::table('studies')->insert([
            'title' => 'Unreal Engine разработчик',
            'description' => 'Выучи самый сложный язык — C++ и научись хардкор-разработке игр',
            'image' => 'Unreal-Engine-study.png',
            'category_id' => 1,
        ]);

        DB::table('studies')->insert([
            'title' => '3D-художник',
            'department' => 'Кафедра 3D-художников',
            'description' => 'Научись создавать классных 3D-персонажей и локации',
            'image' => '3D-artist-study.png',
            'category_id' => 2,
        ]);
        DB::table('studies')->insert([
            'title' => 'UI/UX-дизайнер',
            'department' => 'Кафедра UI/UX дизайна',
            'description' => 'Научись создавать интерефейсы, направленные на человека',
            'image' => 'Ux-Ui-study.png',
            'category_id' => 2,
        ]);
        DB::table('studies')->insert([
            'title' => 'Моушен-дизайнер',
            'department' => 'кафедра моушен-дизайна',
            'description' => 'Освой искусство монтажа',
            'image' => 'Motion-study.png',
            'category_id' => 2,
        ]);
        DB::table('studies')->insert([
            'title' => '2D-художник',
            'department' => 'кафедра 2D-художников',
            'description' => 'Рисуй на бумаге, рисуй в диджитале. Рисуй пейзажи, рисуй людей',
            'image' => '2D-artist-study.png',
            'category_id' => 2,
        ]);

        DB::table('studies')->insert([
            'title' => 'Квантовая физика',
            'department' => 'кафедра квантовой физики',
            'description' => 'Познай все тайны квантового мира',
            'image' => 'quantum-study.png',
            'category_id' => 3,
        ]);
        DB::table('studies')->insert([
            'title' => 'Астрономия',
            'description' => 'Научись наблюдению за звёздами. У нас даже обсерватория есть',
            'image' => 'astronomy-study.png',
            'category_id' => 3,
        ]);
        DB::table('studies')->insert([
            'title' => 'Химия',
            'description' => 'Даже если тебе в школе не давалась химия, мы всё равно объясним всё понятно',
            'image' => 'Chemistry-study.png',
            'category_id' => 3,
        ]);
        DB::table('studies')->insert([
            'title' => 'Математика',
            'description' => 'Объясняем сложное простым языком. Если надо — повторим школьную программу',
            'image' => 'Math-study.png',
            'category_id' => 3,
        ]);

        DB::table('studies')->insert([
            'title' => 'Предмет Менеджмент',
            'department' => 'кафедра менеджмента',
            'description' => 'Кто знает, быть может ты станешь талантливым менеджером?',
            'image' => 'managament-study.png',
            'category_id' => 4,
        ]);
        DB::table('studies')->insert([
            'title' => 'Философия',
            'department' => 'кафедра философии',
            'description' => 'Так как же появился мир? На этот вопрос и ищем мы ответ',
            'image' => 'philopsophy-study.png',
            'category_id' => 4,
        ]);
        DB::table('studies')->insert([
            'title' => 'Маркетинг',
            'department' => 'кафедра маркетинга',
            'description' => 'Узнай всё о рекламе',
            'image' => 'Marketing-study.png',
            'category_id' => 4,
        ]);

        DB::table('studies')->insert([
            'department' => 'кафедра мышления программиста',
        ]);
        DB::table('studies')->insert([
            'department' => 'кафедра объектно-ориентированного программирования',
        ]);
        DB::table('studies')->insert([
            'department' => 'Кафедра физики',
        ]);


        DB::table('categories')->insert([
            'title' => 'It-специальности',
        ]);
        DB::table('categories')->insert([
            'title' => 'Творческие специальности',
        ]);
        DB::table('categories')->insert([
            'title' => 'Точные науки',
        ]);
        DB::table('categories')->insert([
            'title' => 'Человеко-ориентированные науки',
        ]);


        DB::table('teachers')->insert([
            'name' => 'Иванов Иван Иванович',
            'image' => 'IvanovIvanIvanovich.png',
            'city' => 'Санкт-Петербург',
        ]);
        DB::table('teachers')->insert([
            'name' => 'Пётр Петрович Павлов',
            'image' => 'PyotrPetrovichPavlov.png',
            'city' => 'Санкт-Петербург',
        ]);
        DB::table('teachers')->insert([
            'name' => 'Павел Павлович Петров',
            'image' => 'PapelPavlopichPetrov.png',
            'city' => 'Москва',
        ]);
        DB::table('teachers')->insert([
            'name' => 'Пётр Петрович Павлович',
            'image' => 'PyotrPetrovichPavlovich.png',
            'city' => 'Владивосток',
        ]);
        DB::table('teachers')->insert([
            'name' => 'Павел Павлович Петров',
            'image' => 'PavelPetrovichPavlovich.png',
            'city' => 'Пермь',
        ]);
        DB::table('teachers')->insert([
            'name' => 'Павел Петрович Павлович',
            'image' => 'PavelPetrovichPavlovich.png',
            'city' => 'Владивосток',
        ]);
        DB::table('teachers')->insert([
            'name' => 'Настасья Микулишна',
            'image' => 'NastasyaMikulishna.png',
            'city' => 'Москва',
        ]);
        DB::table('teachers')->insert([
            'name' => 'Василиса Васильевна Леонардова',
            'image' => 'VasilisaVasilevnaLeonardovna.png',
            'city' => 'Пермь',
        ]);
        DB::table('teachers')->insert([
            'name' => 'Кирилл Кирилович Кирилов',
            'image' => 'CyrillCyrillovichCyrillov.png',
            'city' => 'Москва',
        ]);
        DB::table('teachers')->insert([
            'name' => 'Микеланджело Леонидович Леонардов',
            'image' => 'MikelandzheloLeonardovichLeonardov.png',
            'city' => 'Омск',
        ]);


        //Первый ряд
        DB::table('study_teacher')->insert([
            'study_id' => 1,
            'teacher_id' => 1,
        ]);
        DB::table('study_teacher')->insert([
            'study_id' => 16,
            'teacher_id' => 1,
        ]);
        
        DB::table('study_teacher')->insert([
            'study_id' => 3,
            'teacher_id' => 2,
        ]);
        DB::table('study_teacher')->insert([
            'study_id' => 17,
            'teacher_id' => 2,
        ]);

        DB::table('study_teacher')->insert([
            'study_id' => 18,
            'teacher_id' => 3,
        ]);

        //Второй ряд
        DB::table('study_teacher')->insert([
            'study_id' => 6,
            'teacher_id' => 4,
        ]);
        DB::table('study_teacher')->insert([
            'study_id' => 7,
            'teacher_id' => 4,
        ]);

        DB::table('study_teacher')->insert([
            'study_id' => 18,
            'teacher_id' => 5,
        ]);

        DB::table('study_teacher')->insert([
            'study_id' => 6,
            'teacher_id' => 6,
        ]);
        DB::table('study_teacher')->insert([
            'study_id' => 7,
            'teacher_id' => 6,
        ]);

        //Третий ряд
        DB::table('study_teacher')->insert([
            'study_id' => 13,
            'teacher_id' => 7,
        ]);
        DB::table('study_teacher')->insert([
            'study_id' => 15,
            'teacher_id' => 7,
        ]);

        DB::table('study_teacher')->insert([
            'study_id' => 14,
            'teacher_id' => 8,
        ]);
        DB::table('study_teacher')->insert([
            'study_id' => 9,
            'teacher_id' => 8,
        ]);

        DB::table('study_teacher')->insert([
            'study_id' => 13,
            'teacher_id' => 9,
        ]);
        DB::table('study_teacher')->insert([
            'study_id' => 15,
            'teacher_id' => 9,
        ]);

        //Последний
        DB::table('study_teacher')->insert([
            'study_id' => 5,
            'teacher_id' => 10,
        ]);
        DB::table('study_teacher')->insert([
            'study_id' => 8,
            'teacher_id' => 10,
        ]);


        $bog_content = 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum. Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. ';

        //А теперь уже блоги
        DB::table('blogs')->insert([
            'title' => 'Основы лайков и репостов',
            'content' => $bog_content,
            'image' => 'LikeDog.png',
        ]);
        DB::table('blogs')->insert([
            'title' => 'Php-шники пыхтели, пыштели да не вупыхтели',
            'content' => $bog_content,
            'image' => 'Elephant.png',
        ]);
        DB::table('blogs')->insert([
            'title' => 'О пифагоровых штанах',
            'content' => $bog_content,
            'image' => 'Pythagoras.png',
        ]);
        DB::table('blogs')->insert([
            'title' => '3 бухгалтерские притчи',
            'content' => $bog_content,
            'image' => 'accountant.png',
        ]);
    }
}
