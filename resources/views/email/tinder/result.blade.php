<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <style type="text/css">
        table td {
            padding: 0;
        }
    </style>
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css"> -->
</head>
<body class="email">
    <p>Dag Luc</p>

    <p>
        @if ($match)
            Iemand is succesvol gematched. De gegevens van de persoon zijn als volgt:
        @else
            Het was geen match. De gegevens van de persoon zijn als volgt:
        @endif
    </p>

    <table  width="100%" style="table-layout: fixed; border-collapse: collapse;">
        <tbody>
            <tr>
                <td style="width: 120px;">Naam</td>
                <td class="value">{{ $tinder_contact->name }}</td>
            </tr>
            <tr>
                <td>Werk email</td>
                <td class="value">{{ $tinder_contact->email }}</td>
            </tr>
            <tr>
                <td>Bedrijf</td>
                <td class="value">{{ $tinder_contact->company }}</td>
            </tr>
            <tr>
                <td>Functie</td>
                <td class="value">{{ $tinder_contact->function }}</td>
            </tr>
            <tr>
                <td>Telefoonnr.</td>
                <td class="value">{{ $tinder_contact->telephone_number }}</td>
            </tr>
        </tbody>
    </table>

    <table  width="100%" style="table-layout: fixed; border-collapse: collapse; margin-top: 20px;">
        <caption style="text-align: left;">Resultaat vragen:</caption>
        <tbody>
            <tr>
                <td style="width: 120px;">Vraag 1</td>
                <td class="value">{{ $tinder_answer->answer1 ? 'Ja' : 'Nee' }}</td>
            </tr>
            <tr>
                <td>Vraag 2</td>
                <td class="value">{{ $tinder_answer->answer2 ? 'Ja' : 'Nee' }}</td>
            </tr>
            <tr>
                <td>Vraag 3</td>
                <td class="value">{{ $tinder_answer->answer3 ? 'Ja' : 'Nee' }}</td>
            </tr>
            <tr>
                <td>Vraag 4</td>
                <td class="value">{{ $tinder_answer->answer4 ? 'Ja' : 'Nee' }}</td>
            </tr>
            <tr>
                <td>Vraag 5</td>
                <td class="value">{{ $tinder_answer->answer5 ? 'Ja' : 'Nee' }}</td>
            </tr>
            <tr>
                <td>Vraag 6</td>
                <td class="value">{{ $tinder_answer->answer6 }}</td>
            </tr>
            <tr>
                <td>Vraag 7</td>
                <td class="value">{{ $tinder_answer->answer7 ? 'Ja' : 'Nee' }}</td>
            </tr>
            <tr>
                <td>Vraag 8</td>
                <td class="value">{{ $tinder_answer->answer8 ? 'Ja' : 'Nee' }}</td>
            </tr>
        </tbody>
    </table>
</body>
</html>
