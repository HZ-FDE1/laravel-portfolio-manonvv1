@extends('layout');
@section('content');

<!--tabel toetsen-->
<main>
    <div class="heading">
        <h1>~Dashboard~</h1>
    </div>

    <div class="table">
        <section>
            <h2>Toetsen</h2>
            <figure>
                <img class="heart" src="https://i.pinimg.com/originals/bd/d3/36/bdd3360a05b0c02cc9cc766a73bc75fc.gif"
                     alt="heart">
            </figure>
        </section>

        <hr>

        <table>
            <tr>
                <th>Blok</th>
                <th>Cursus</th>
                <th>EC</th>
                <th>Toets</th>
                <th>Cijfer</th>
            </tr>

            <tr>
                <td rowspan="3" class="quartile">1</td>
                <td class="work-in-progress">Program & Career Orientation</td>
                <td>2,5</td>
                <td>Assessment</td>
                <td></td>
            </tr>

            <tr>
                <td class="work-in-progress">Computer Science Basics</td>
                <td>5</td>
                <td>Written Exam</td>
                <td></td>
            </tr>

            <tr>
                <td class="work-in-progress">Programming Basics</td>
                <td>5</td>
                <td>Case Study Exam</td>
                <td></td>
            </tr>

            <tr>
                <td rowspan="2" class="quartile">2</td>
                <td rowspan="2">Object Oriented Programming</td>
                <td rowspan="2">10</td>
                <td>Case Study (50%)</td>
                <td rowspan="2"></td>
            </tr>

            <tr>
                <td>Project (50%)</td>
            </tr>

            <tr>
                <td rowspan="4" class="quartile">3</td>
                <td>Framework Development 1</td>
                <td>5</td>
                <td>Case Study</td>
                <td></td>
            </tr>

            <tr>
                <td rowspan="3">Framework Project 1</td>
                <td rowspan="3">7,5</td>
                <td>Project (33%)</td>
                <td rowspan="3"></td>
            </tr>

            <tr>
                <td>Case Study Exam (33%)</td>
            </tr>

            <tr>
                <td>Report (33%)</td>
            </tr>

            <tr>
                <td rowspan="4" class="quartile">4</td>
                <td rowspan="4">Framework Project 2</td>
                <td rowspan="4">10</td>
                <td>Portfolio (50%)</td>
                <td rowspan="4"></td>
            </tr>
            <tr>

            <tr>
                <td>Project (25%)</td>
            </tr>

            <tr>
                <td>Assessment (25%)</td>
            </tr>

            <tr>
                <td rowspan="1" class="quartile">Het hele jaar</td>
                <td>PPD</td>
                <td>12.5</td>
                <td>Portfolio</td>
                <td></td>
            </tr>

            <tr>
                <td rowspan="2" class="quartile">Wanneer ik wil</td>
                <td>Personality 1</td>
                <td>1,25</td>
                <td>Portfolio</td>
            </tr>

            <tr>
                <td>Personality 2</td>
                <td>1,25</td>
                <td>Portfolio</td>
                <td></td>
            </tr>
        </table>

        <hr class="second-heading">

        <table>
            <tr>
                <td class="work-in-progress">Work in progress</td>
                <td class="passed-exam">Passed</td>
                <td class="failed-exam">Failed</td>
            </tr>
        </table>

        <hr class="second-heading">

        <p>Progressiebar EC's</p>
        <div class="container">
            <div class="skill html">60%</div>
        </div>
    </div>
</main>

@endsection
