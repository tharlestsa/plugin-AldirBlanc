<section id="termos">

    <h2 class="title">Renda Emergencial Cultural</h2>

    <p class="description">De acordo com os critérios da LEI Nº 14.017 com sanção presidencial em 29 DE JUNHO DE 2020. Para ter acesso ao Auxílio Emergencial Cultural, você deve cumprir os seguintes requisitos:</p>
    <p class="termos-warning">Leia com atenção as informações abaixo. Você precisa se encaixar em todas elas.</p>

    <ul class="list">
        <li class="list-item">
            <input type="checkbox" class="hidden-box" id="one"/>
            <label for="one" class="check-label">
                <span class="check-label-box"></span>
                <span class="check-label-text">
                    Declaro atuação no setor cultural e fonte de renda, conforme lei nº 14.017, de
                    29 de junho de 2020, que dispõe sobre ações emergenciais destinadas ao setor
                    cultural a serem adotadas durante o estado de calamidade pública.
                </span>
            </label>
        </li>
        <li class="list-item">
            <input type="checkbox" class="hidden-box" id="two" />
            <label for="two" class="check-label">
                <span class="check-label-box"></span>
                <span class="check-label-text">
                    Declaro que atuo social ou profissionalmente nas áreas artística e cultural
                    nos 24 (vinte e quatro) meses imediatamente anteriores à 29 de junho de 2020,
                    conforme inciso i do art. 6º da lei nº 14.017.
                </span>
            </label>
        </li>
        <li class="list-item">
            <input type="checkbox" class="hidden-box" id="three" />
            <label for="three" class="check-label">
                <span class="check-label-box"></span>
                <span class="check-label-text">
                    Declaro que não sou titular de benefício previdenciário ou assistencial do
                    governo federal, exceto do programa bolsa família, conforme inciso iii do art.
                    6º da lei nº 14.017.
                </span>
            </label>
        </li>
        <li class="list-item">
            <input type="checkbox" class="hidden-box" id="four" />
            <label for="four" class="check-label">
                <span class="check-label-box"></span>
                <span class="check-label-text">
                    Declaro que não estou recebendo benefício do seguro desemprego ou
                    programa de transferência de renda federal, exceto do programa bolsa família,
                    conforme inciso iii do art. 6º da lei nº 14.017.
                </span>
            </label>
        </li>
        <li class="list-item">
            <input type="checkbox" class="hidden-box" id="five" />
            <label for="five" class="check-label">
                <span class="check-label-box"></span>
                <span class="check-label-text">
                    Declaro renda familiar per capita de até meio salário mínimo ou renda familiar
                    total de até três salários mínimos, conforme inciso iv do art. 6º da lei nº 14.017.
                </span>
            </label>
        </li>
        <li class="list-item">
            <input type="checkbox" class="hidden-box" id="six" />
            <label for="six" class="check-label">
                <span class="check-label-box"></span>
                <span class="check-label-text">
                    Declaro que obtive rendimento médio de 01/01/2019 a 29/02/2020 de até 2 (dois)
                    salários mínimos, conforme inciso iv do art. 6º da lei nº 14.017.
                </span>
            </label>
        </li>
        <li class="list-item">
            <input type="checkbox" class="hidden-box" id="seven" />
            <label for="seven" class="check-label">
                <span class="check-label-box"></span>
                <span class="check-label-text">
                    Declaro que no ano de 2018, não recebi rendimentos acima de R$ 28.559,70 (vinte
                    e oito mil, quinhentos e cinquenta e nove reais e setenta centavos), conforme
                    inciso v do art. 6º da lei nº 14.017.
                </span>
            </label>
        </li>
        <li class="list-item">
            <input type="checkbox" class="hidden-box" id="eight" />
            <label for="eight" class="check-label">
                <span class="check-label-box"></span>
                <span class="check-label-text">
                    Declaro não ser beneficiário(a) do auxílio emergencial previsto na lei nº 13.982,
                    de 2 de abril de 2020, e em conformidade com o inciso vii do art. 6º da lei nº 14.017.
                </span>
            </label>
        </li>
        <li class="list-item">
            <input type="checkbox" class="hidden-box" id="nine" />
            <label for="nine" class="check-label">
                <span class="check-label-box"></span>
                <span class="check-label-text">
                    Declaro que estou ciente de que, em caso de utilização de qualquer meio ilícito,
                    imoral ou declaração falsa para a participação deste credenciamento, incorro
                    nas penalidades previstas nos artigos 171 e 299 do decreto lei nº 2.848, de 07 de
                    dezembro de 1940 (código penal).
                </span>
            </label>
        </li>
        <li class="list-item">
            <input type="checkbox" class="hidden-box" id="ten" />
            <label for="ten" class="check-label">
                <span class="check-label-box"></span>
                <span class="check-label-text">
                    Declaro que estou ciente da concessão das informações por mim declaradas
                    neste formulário para validação em outras bases de dados oficiais.
                </span>
            </label>
        </li>
    </ul>


    <div class="buttons">
        <button class="btn-prosseguir">Prosseguir para inscrição</button>
    </div>

    <div id="modalAlert" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <p>Você precisa aceitar todos os termos para prosseguir com a inscrição no auxílio emergencial da cultura.</p>
        </div>
    </div>

</section>

<script>
    let span          = document.getElementsByClassName("close")[0];
    let modal         = document.querySelector("#modalAlert");
    let btnProsseguir = document.querySelector(".btn-prosseguir");

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {

        if(event.target == btnProsseguir){
            goToNextPage();
        }else{
            if(modal.style.display == 'block'){
                modal.style.display = "none";
                // console.log(event.target, modal)
                // if (event.target == modal) {
                //     modal.style.display = "none";
                // }
            }
        }

    }

    // Close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    function goToNextPage() {
        var checkboxes        = document.querySelectorAll('input[type="checkbox"]');
        var checkboxesChecked = document.querySelectorAll('input[type="checkbox"]:checked');

        if(checkboxes.length === checkboxesChecked.length){
            //redirect to next page
            document.location = `${MapasCulturais.baseURL}aldirblanc/selecionaragente`;
        }else{
            modal.style.display = "block";

        }
    }

</script>