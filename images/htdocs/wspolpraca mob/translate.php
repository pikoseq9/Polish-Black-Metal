<?php
    if(isset($_GET['lang'])){
        setcookie("Current_language", $_GET['lang'], time() + (86400 * 30), "/");
        header('Location:index.php');
        exit();
    }

    const translations = [
        'pl'=> [
            'title_1' => "Strona korporacyjna",
            'title_2' => "O nas",
            'title_3' => "Strona korporacyjna",
            'img_1' => "images/ASSET_ICO_Flag_PL.svg",
            'welcome1' => "Rozpocznij współpracę<br>z ",
            'welcome2' => "OTTO Work Force",
            'img_2' => "images/underformimg.jpg",
            'form_1' => "Wypełnij formularz:",
            'form_2' => "Imię i nazwisko",
            'form_3' => "Numer telefonu",
            'form_4' => "Adres e-mail",
            'form_5' => "Prześlij zgłoszenie",
            'form_6' => "Wyczyść",
            "form_7" => "Nazwa firmy",
            "form_8" => "NIP",
            "label_1" => "Co zyskują partnerzy OTTO?",
            "label_2" => "Pakiety szkoleń z zakresu rekrutacji, marketingu rekrutacyjnego, legalizacji pobytu i pracy w Polsce oraz dotyczqce oferowanych stanowisk pracy.",
            "label_3" => "Możliwość odbycia wizyt w zaktadach pracy naszych klientów.",
            "label_4" => "Dostęp do nowoczesnej platformy rekrutacyjnej.",
            "label_5" => "Dodatkowe sposoby na rekrutacje oraz materiały graficzne.",
            "label_6" => "Szanse na dołączenie do programu lojalnościowego z nagrodami.",
            "label_7" => "Przejrzysty system rozliczeń oraz informacje o zatrudnionych pracownikach.",
            "label_8" => "Wsółprace na zasadzie franczyzy z miedzynarodową i znaną korporacją.",
            "label_9" => "Kontakt z opiekunem OTTO — osobą indywidualnie oddelegowaną do prowadzenia współpracy.",
            "info_title1" => "DOŚWIADCZENIE",
            "info_title2" => "ROZLEGŁA SIEĆ",
            "info_title3" => "WSPARCIE",
            "info_title4" => "ELASTYCZNOŚĆ",
            "info_text1" => "Nasze wieloletnie doświadczenie oraz wiedza branżowa pozwolą Ci osiągnąć nowe poziomy efektywności.",
            "info_text2" => "Jesteśmy obecni w kluczowych regionach i miastach europejskich.",
            "info_text3" => "Nasz zespół dedykowanych specjalistów zawsze służy pomocą Tobie oraz zrekrutowanym przez ciebie pracownikom.",
            "info_text4" => "Staramy się dostosować model współpracy do indywidualnych potrzeb i oczekiwać partnera.",
            "offer_title" => "Co zapewniamy naszym pracownikom tymczasowym?",
            "offer_text" => "W OTTO Work Force kładziemy ogromny nacisk na kompleksowe podejście do rozwoju rynku pracy, dlatego dbamy zarówno o naszych cenionych partnerów biznesowych, jak i dedykowanych pracowników tymczasowych. Rozumiemy, ze współpraca na wielu poziomach prowadzi do sukcesu, a troska o zrównoważony rozwój oraz satysfakcję obu stron stanowi dla nas priorytet. Dlatego też gwarantujemy pracownikom tymczasowym szereg korzyści i wsparcia:",
            "offer_1" => "Legalne zatrudnienie (umowa o prace lub umowa zlecenie)",
            "offer_2" => "Brak opłat za zatrudnienie",
            "offer_3" => "Zorganizowany dojazd ze Lwowa",
            "offer_4" => "Opieka konsultanta i rekrutera",
            "offer_5" => "Wsparcie w zatatwieniu wszelkich formalności </br>
            (PESEL, mieszkanie, pomoc w otwarciu konta bankowego)",
            "offer_6" => "Legalizacja dłuższego pobytu w Polsce",
            "offer_7" => "Wypłata tygodnidówek (moóliwość otrzymania cotygodniowych zaliczek)",
            "offer_8" => "Wysokie standardy mieszkaniowe",
            "offer_9" => "Infolinię do stałego kontaktu",
            "offer_10" => "Ubezpieczenie zdrowotne i NNW",
            "intro_title" => "Kim jesteśmy?",
            "intro_text1" => "Witamy w OTTO Work Force! Jesteśmy jedną z największych miedzynarodowych agencji pośrednictwa pracy w Europie. Mamy biura w Polsce, Holandii, Niemczech, Mołdawii, Bułgarii, Rumunii, Chorwacji, Czechach oraz na Ukrainie, Słowacji i Węgrzech.",
            "intro_text2" => "Nie minęło wiele czasu od założenia firmy w 2000 roku a objęciem pozycji
            lidera wśród agencji rekrutacyjnych na rynku europejskim. OTTO Work Force
            współpracuje z firmami z sektora produkcyjnego, logistycznego, handlowego
            i innych.",
            "intro_text3" => "Jeśli jesteś gotów dołączyć do grona naszych cenionych partnerów, wypełnij
            formularz już dziś. Inwestujemy w związki biznesowe oparte na wzajemnym
            szacunku i wspólnych celach. Skorzystaj z okazji i otwórz drzwi do nowych
            możliwości dla Twojej firmy.",
            "intro-button" => "Wypełnij formularz",
            "hero_img_1" => "./images/Zasob_13.png",
            "hero_img_2" => "./images/Zasob_14.png",
            "hero_img_3" => "./images/Zasob_15.png",
            "country" => "PL",
            "SUCCESS" => "Wysłano!",
            "ERROR" => "Błąd!",
        	"form_2_error" => "Tylko litery, imię i nazwisko oddziel spacją",
        	"form_3_error" => "Przykładowy format +12 123 123 123",
        	"form_4_error" => "Przykładowy format example@gmail.com",
            "form_7_error" => "Przykładowa: Polska, Ukraina..",
            "form_8_error" => "Przykładowy NIP: 6509934957",
        	"thankyou_1" => "DZIĘKUJEMY!",
        	"thankyou_2" => "ZA WYSŁANĄ APLIKACJĘ",
        	"thankyou_3" => "Skontaktujemy się wkrótce",
        	"return_to_form" => "Powrót do formularza",
        	"Main_title" => "Znajdziemy pracę dla każdego - OTTO Work Force",
            "rodo" => "Chcemy żebyś wiedział, że Administratorem Danych Osobowych jest OTTO Work Force Europe sp. z o.o. ul. 1 Maja 3-5, 45-068 Opole, KRS 0000362818, NIP 8961507000, Regon 021326515, KRAZ 11500. Twoje dane będą przetwarzane przez Administratora Danych Osobowych dla potrzeb rekrutacji, tj. w procesie wyszukiwania odpowiednich kandydatów do zatrudnienia lub zarekomendowania ich naszym klientom. Pełna treść obowiązku informacyjnego znajduje się na stronie OTTO."
        
        ], 
        'ua'=> [
            'title_1' => "Головна сторінка",
            'title_2' => "Про програму", 
            'title_3' => "Корпораційний веб-сайт",
            'img_1' => "images/Zasob_UA.png",
            'img_2' => "images/Zasob_11.png",
            'form_1' => "ЗАПОВНИ ФОРМУ І ЗБУДУЙ СВОЮ КАРЬЄРУ З ОТТО",
            'form_2' => "Ім’я та прізвище",
            'form_3' => "Номер телефону",
            'form_4' => "Ел. пошта",
            'form_5' => "Вислати",
            'form_6' => "Відмінити",
            'form_7' => "Національність",
            "card_1" => "ЗАПОВНИ ФОРМУЛЯР",
            "card_2" => "ПОГОВОРИ З КОНСУЛЬТАНТОМ",
            "card_3" => "ВИКОНАЙ ФОРМАЛЬНОСТІ",
            "card_4" => "ПРАЦЮЙ ТА ЗАРОБЛЯЙ",
            "card_5" => "Вибери вакансію для себе",
            "card_text_1" => "Залиши інформацію про себе, щоб наш консультант міг зв’язатися з Тобою та провести весь процес рекрутації.",
            "card_text_2" => "В OTTO ми зосереджені на людях, тому ми з самого початку призначимо Тобі особу до контакту, яка подбає про Твоє працевлаштування",
            "card_text_3" => "Консультант допоможе Тобі з оформленням необхідних документів, роз’яснить юридичні питання по працевлаштуванню та буде Твою підтримкою навіть коли ти почнеш вже працювати!",
            "card_text_4" => "Отримай роботу та  свою першу зарплату навіть після першого тижня роботи. І з часом... Побудуй свою кар'єру з OTTO.",
            "card_text_5" => "OTTO Work Force щодня працевлаштовує людей по всій Польщі та за її межами. Приєднуйся до групи задоволених працівників! У нас є робота для Тебе у таких галузях, як: виробництво, логістика, торгівля, послуги та e-commerce. Залиши контакт і дізнайся більше про наші пропозиції!",
            "hero_img_1" => "./images/Zasob_16.png",
            "hero_img_2" => "./images/Zasob_17.png",
            "hero_img_3" => "./images/Zasob_18.png",
            "country" => "UA",
            "SUCCESS" => "надіслано!",
            "ERROR" => " помилка!",
        	"form_2_error" => "Тільки ім’я та прізвище відділене пробілом",
        	"form_3_error" => "Наприклад +12 123 123 123",
        	"form_4_error" => "Наприклад example@gmail.com",
            "form_7_error" => "Наприклад, Польща, Україна",
            "thankyou_1" => "Дякуємо!",
        	"thankyou_2" => "За вислану заявку",
        	"thankyou_3" => "Невдовзі ми зателефонуємо",
        	"return_to_form" => "повернутись до форми реєстрації",
        	"Main_title" => "Знайдемо роботу для кожного - OTTO Work Force",
            "rodo" => "Інформуємо, що Адміністратором Ваших персональних даних є OTTO Work Force Europe sp. z o.o. ul. 1 Maja 3-5, 45-068 Opole, KRS 0000362818, NIP 8961507000, Regon 021326515, KRAZ 11500. Ваші дані будуть оброблятися Адміністратором персональних даних з метою рекрутингу, тобто в процесі пошуку відповідних кандидатів на роботу або рекомендації їх нашим клієнтам. Повний зміст інформаційного зобов'язання можна знайти на веб-сайті ОТТО."
        ], 
        'ru'=> [
            'title_1' => "Главная страница", 
            'title_2' => "О программе", 
            'title_3' => "Корпоративный веб-сайт",
            'img_1' => "images/Zasob_RU.png",
            'img_2' => "images/Zasob_12.png",
            'form_1' => "ЗАПОЛНИ ФОРМУ И ПОСТРОЙ СВОЮ КАРЬЕРУ С ОТТО",
            'form_2' => "Имя и фамилия",
            'form_3' => "Номер телефона ",
            'form_4' => "Ел. почта ",
            'form_5' => "Выслать",
            'form_6' => "Отменить",
            'form_7' => "Национальность",
            "card_1" => "ЗАПОЛНИ ФОРМУ",
            "card_2" => "ПОГОВОРИ С КОНСУЛЬТАНТОМ",
            "card_3" => "ВЫПОЛНИ ФОРМАЛЬНОСТИ",
            "card_4" => "РАБОТАЙ И ЗАРАБАТЫВАЙ",
            "card_5" => "Выбери вакансию для себя",
            "card_text_1" => "Оставь информацию о себе, чтобы наш консультант мог связаться с Тобой и провести весь процесс рекрутации.",
            "card_text_2" => "В OTTO мы сосредоточены на людях, поэтому мы с самого начала назначим Тебе ответственого человека, который позаботится о Твоем трудоустройстве.",
            "card_text_3" => "Консультант поможет Тебе с оформлением необходимых документов, разъяснит юридические вопросы по трудоустройству и будет Твоей поддержкой даже когда ты уже начнешь работать!",
            "card_text_4" => "Получи работу и свою первую зарплату даже после первой недели работы. И со временем… Построй свою карьеру с OTTO. ",
            "card_text_5" => "OTTO Work Force ежедневно трудоустраивает людей по всей Польше и за ее пределами. Присоединяйся к группе довольных работников! У нас есть работа для Тебя в таких отраслях, как: производство, логистика, торговля, услуги и e-commerce. Оставь контакт и узнай больше о наших предложениях! ",
            "hero_img_1" => "./images/Zasob_19.png",
            "hero_img_2" => "./images/Zasob_20.png",
            "hero_img_3" => "./images/Zasob_21.png", 
            "country" => "RU",
            "SUCCESS" => "отправлено!",
            "ERROR" => "ошибка!",
        	"form_2_error" => "Только имя и фамилия отделены пробелом",
        	"form_3_error" => "Например +12 123 123 123",
        	"form_4_error" => "Например, example@gmail.com",
            "form_7_error" => "Например, Польша, Украина",
            "thankyou_1" => "Спасибо!",
        	"thankyou_2" => "За высланную заявку",
        	"thankyou_3" => "Вскоре мы позвоним",
        	"return_to_form" => "вернуться к форме регистрации",
        	"Main_title" => "Найдем работу для каждого - OTTO Work Force",
            "rodo" => "Інформуємо, що Адміністратором Ваших персональних даних є OTTO Work Force Europe sp. z o.o. ul. 1 Maja 3-5, 45-068 Opole, KRS 0000362818, NIP 8961507000, Regon 021326515, KRAZ 11500. Ваші дані будуть оброблятися Адміністратором персональних даних з метою рекрутингу, тобто в процесі пошуку відповідних кандидатів на роботу або рекомендації їх нашим клієнтам. Повний зміст інформаційного зобов'язання можна знайти на веб-сайті ОТТО."

        ], 
        'eng'=> [
            'title_1' => "Home",
            'title_2' => "About programme",
            'title_3' => "Corporate website",
            'img_1' => "images/Zasob_ENG.png",
            'img_2' => "images/Zasob_10ENG.png",
            'form_1' => "COMPLETE THE FORM AND BUILD YOUR CAREER IN OTTO",
            'form_2' => "Name and surname",
            'form_3' => "Phone number",
            'form_4' => "E-mail address",
            'form_5' => "Send",
            'form_6' => "Clear",
            "form_7" => "Nationality",
            "card_1" => "COMPLETE THE FORM",
            "card_2" => "TALK TO A CONSULTANT",
            "card_3" => "COMPLETE THE FORMALITIES",
            "card_4" => "WORK AND EARN",
            "card_5" => "CHOOSE AN OFFER FOR YOURSELF",
            "card_text_1" => "Leave some information about yourself so that our consultant can contact you and guide you through the recruitment process.",
            "card_text_2" => "At OTTO we focus on people, which is why we will assign you a contact person to take care of your employment right from the start.",
            "card_text_3" => "Your consultant will help you with the necessary paperwork, explain the legal issues of employment and will be your support even when you have already started work!",
            "card_text_4" => "Gain employment and earn your first paycheck even after a week's work. And over time... Build your career with OTTO.",
            "card_text_5" => "OTTO Work Force employs people all over Poland and beyond every day. Join the group of satisfied employees! We have jobs for you in industries such as production, logistics, retail, services and e-commerce. Leave a contact and find out more about our offers!",
            "hero_img_1" => "./images/Zasob_13ENG.png",
            "hero_img_2" => "./images/Zasob_14ENG.jpg",
            "hero_img_3" => "./images/Zasob_15.png",
            "country" => "EN",
            "SUCCESS" => "Sent!",
            "ERROR" => "Error!",
        	"form_2_error" => "Form error!",
        	"form_3_error" => "Example +12 123 123 123",
        	"form_4_error" => "Example example@gmail.com",
            "form_7_error" => "Example Poland, Ukraine..",
        	"thankyou_1" => "THANK YOU!",
        	"thankyou_2" => "FOR YOUR APPLICATION",
        	"thankyou_3" => "We will contact you",
        	"return_to_form" => "back to form",
        	"Main_title" => "WE FIND A JOB FOR EVERYONE - OTTO Work Force",
            "rodo" => "We want you to know that the Administrator of your Personal Data is OTTO Work Force Europe sp. z o.o. ul. 1 Maja 3-5, 45-068 Opole, KRS 0000362818, NIP 8961507000, Regon 021326515, KRAZ 11500. Your data will be processed by the Personal Data Administrator for recruitment purposes, i.e. in the process of finding suitable candidates for employment or recommending them to our clients. The full content of the information obligation can be found on the OTTO website."
        ]
    ];
    function __($text) {
        if(isset($_COOKIE['Current_language'])){
            $lang=$_COOKIE['Current_language'];
        } else {
            $lang='pl';
        }
        return translations[$lang][$text];
    }
