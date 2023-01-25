<?php

namespace Database\Seeders;

use App\Models\Surgery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SurgerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Surgery::upsert(
            [
                [
                    'name' => 'Lifting twarzy', 'cost' => '19000', 'doctor_id' => '2','description' => ' Lifting to zabieg umożliwiający podniesienie i naciągnięcie zwiotczałej skóry twarzy. Ma przede wszystkim działanie odmładzające, jednakże dodatkowo może pomóc delikatnie skorygować rysy twarzy. Niekwestionowaną zaletą liftingu jest fakt, że po zabiegu twarz wygląda zdecydowanie młodziej, a przy tym niezwykle naturalnie. Ingerencja chirurgiczna praktycznie nie jest zauważalna.',
                ],
                [
                    'name' => 'Operacja nosa', 'cost' => '17000', 'doctor_id' => '1','description' => ' Polecana osobom nieakceptującym kształtu czy wielkości swojego nosa. Zabieg ten jest skierowany także dla pacjentów po urazach nosa, jak również tym, którzy z uwagi na niedrożność nosa mają problemy z oddychaniem. W zależności od problemu, korekcji poddawana jest część kostna, sam czubek nosa, czyli część chrzęstna albo przegroda nosowa. Korygowanie nosa jest przeprowadzane metodą otwartą lub zamkniętą. Pacjent bezpośrednio po operacji musi pozostać w klinice. Okres regeneracji trwa około 12 miesięcy i po upływie tego czasu możliwe jest dokładne ocenienie efektów. ',
                ],
                [
                    'name' => 'Plastyka powiek', 'cost' => '13000','doctor_id' => '3', 'description' => 'Odnosi się zarówno do powiek górnych, dolnych, jak i obydwu jednocześnie. Powieki górne są operowane wtedy, kiedy pojawia się problem związany ze zwiotczoną, marszczącą się skórą. Niekiedy może ona nawet ograniczać pole widzenia, więc przeprowadzenie operacji jest podyktowane nie tylko chęcią poprawy wyglądu, ale też względami zdrowotnymi. Powieki dolne są poddawane zabiegowi w przypadku występowania tzw. worków pod oczami niekiedy z towarzyszącym nadmiarem wiotkiej skóry. Zaletą zabiegów jest to, że po ich przeprowadzeniu na skórze zostaje niemalże niewidoczna blizna, a efekt odmłodzenia jest zwykle spektakularny.',
                ],
                [
                    'name' => 'Plastyka brzucha', 'cost' => '19000','doctor_id' => '2', 'description' => 'Polecana dla osób, które nie są zadowolone z wyglądu swojego brzucha i mimo podejmowania różnych, mniej inwazyjnych działań nie są w stanie uzyskać zadowalającego efektu. Problem wiotkiej, wiszącej skóra brzucha dotyczy w szczególności kobiet po ciąży albo osób, które straciły sporo kilogramów. Zabieg plastyki brzucha jest przeprowadzany w znieczuleniu ogólnym. Blizna jest schowana w bieliźnie. Podczas operacji możliwe jest także zeszycie rozstępu mięśni prostych brzucha co gwarantuje efekt płaskiego brzucha i pomaga odzyskać ładną talię. Po zabiegu pacjent musi pozostać w klinice około 2-3 doby w zależności od przebiegu pooperacyjnego. Przez 4-8 tygodni konieczne jest noszenie pasa przepuklinowego. Powrót do aktywności fizycznej możliwy jest po 2 miesiącach.',
                ],
                [
                    'name' => 'Lifting dłoni', 'cost' => '8000','doctor_id' => '4', 'description' => 'Pozwala przywrócić utraconą jędrność skóry. Jak wiadomo, patrząc na dłonie, można łatwo zauważyć upływający czas. W celu zwiększenia jędrności tego obszaru skóry, pobierana jest tkanka tłuszczowa pacjenta, a następnie wszczepia się ją na powierzchnię grzbietową rąk.',
                ],
                [
                    'name' => 'Laserowe usuwanie rozstępów', 'cost' => '800','doctor_id' => '1', 'description' => 'Polega na stopniowym zmniejszaniu widoczności wrzecionowatych pasm na ciele za pomocą lasera Clear Lift. Zabieg nie wymaga znieczulenia. Po jego wykonaniu na skórze nie pozostają ślady, może być ona jedynie delikatnie zaczerwieniona i obrzęknięta. Efekty narastają stopniowo przez 3 miesiące.',
                ],
                [
                    'name' => 'Osteotomia szczęki', 'cost' => '29000','doctor_id' => '1', 'description' => 'Zabieg wykonywany z powodu wad kości szczęk, które objawiają się przede wszystkim dużym nosem, zapadnięciem okolicy podoczodołowej oraz małą wargą górną. Ponadto występują wady zgryzu, objawiające się położeniem górnych, przednich zębów głębiej w stosunku do zębów dolnych. Zabieg zwykle poprzedza leczenie ortodontyczne, mające na celu uszeregowanie zębów w taki sposób, by po zabiegu góra i dół do siebie pasowały. Zabieg przeprowadzany jest w pełnej narkozie i polega na przecięciu kości szczęki, jej przesunięciu do właściwej pozycji, a następnie zespoleniu przy pomocy tytanowych płytek i śrubek. Zabieg wykonywany jest wewnątrzustnie, dzięki czemu nie pozostawia żadnych widocznych blizn.',
                ],
                [
                    'name' => 'Przeszczep włosów metodą FUE', 'cost' => '13000','doctor_id' => '2', 'description' => 'FUE to metoda przeszczepu włosów bez pozostawienia widocznej blizny, bez skalpela i bez szwów. Polega na pobraniu jednostek mieszkowych (skupisko 1–5 mieszków włosowych) urządzeniem o średnicy poniżej milimetra. Wykorzystujemy najbardziej zaawansowane technologicznie urządzenie dostępne na rynku, uzyskując najwyższą możliwą jakość przeszczepu i minimalny odsetek uszkodzeń.Włosy najczęściej pobierane są z okolicy potylicznej, ale można też wykorzystać inne miejsca, na przykład brodę. Po pobraniu włosów pozostają niewielkie strupki, które odpadają po kilku dniach. Miejsca pobrania stają się niewidoczne, bez pozostawienia linijnej, szpecącej blizny. Jednorazowo można przeszczepić do około 2500 jednostek mieszkowych, czyli około 6000 włosów. Zabieg trwa kilka godzin, jest bezbolesny dzięki znieczuleniu miejscowemu, a pacjent tego samego dnia może opuścić Klinikę. Włosy w przeszczepionym miejscu odrastają ostatecznie po około 9 miesiącach. Przeszczepione włosy są niewrażliwe na androgeny i pozostają w nowym miejscu praktycznie do końca życia. Leczenie chirurgiczne często uzupełniamy o odpowiednie leki i zabiegi małoinwazyjne aby zoptymalizować wzrost włosów.',
                ],
            ],
            'name'
        );

    }
}
