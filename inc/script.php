<script src="assets/js/scripts.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/variable-pie.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script>

    Highcharts.chart('container', {
        chart: {
            type: 'variablepie'
        },
        title: false,
        credits: {
            enabled: false
        },
        tooltip: {
            headerFormat: '',
            pointFormat: '<span style="color:{point.color}">\u25CF</span> <b> ' +
                '{point.name}</b><br/>' +
                'Porcentagem: <b>{point.y}%</b><br/>'
        },
        series: [{
            minPointSize: 10,
            innerSize: '20%',
            zMin: 0,
            name: 'áreas',
            borderRadius: 5,
            data: [{
                name: 'Moradia',
                y: 27,
                z: 1000000
            }, {
                name: 'Saúde',
                y: 21,
                z: 900000
            }, {
                name: 'Desigualdade Racial',
                y: 11,
                z: 400000
            }, {
                name: 'Projeto',
                y: 10,
                z: 350000
            }, {
                name: 'Desigualdade Social',
                y: 8,
                z: 300000
            }, {
                name: 'Pós COVID',
                y: 7,
                z: 280000
            }, {
                name: 'Desenvolvimento',
                y: 7,
                z: 270000
            }, {
                name: 'Saneamento Básico',
                y: 5,
                z: 200000
            }, {
                name: 'Desemprego',
                y: 4,

                z: 150000
            }, {
                name: 'Necesidades',
                y: 4,
                z: 150000
            }
            ],
            colors: [
                '#4caefe',  // Light Blue
                '#3dc3e8',  // Cyan
                '#2dd9db',  // Teal
                '#1feeaf',  // Light Green
                '#0ff3a0',  // Bright Green
                '#00e887',  // Neon Green
                '#23e274',  // Spring Green
                '#34c461',  // Fresh Green
                '#45b24e',  // Green
                '#56a13b'   // Dark Green
            ]
        }]
    });

</script>
<script>
    $(document).ready(function(){
        $('#contact-form').on('submit', function(event){
            event.preventDefault();

            var recaptcha = grecaptcha.getResponse();
            if(recaptcha === ""){
                $('#form-messages').html('<p class="alert alert-warning">Please check the captcha form.</p>');
                return;
            }

            var formData = {
                'name': $('input[name=name]').val(),
                'email': $('input[name=email]').val(),
                'subject': $('input[name=subject]').val(),
                'message': $('textarea[name=message]').val(),
                'g-recaptcha-response': recaptcha
            };

            $.ajax({
                type: 'POST',
                url: 'https://l.socialissues.local/email.php',
                data: formData,
                dataType: 'json',
                encode: true
            })
                .done(function(data){
                    if(data.success){
                        $('#form-messages').html('<p class="alert alert-success">' + data.message + '</p>');
                        $('#contact-form')[0].reset();
                        grecaptcha.reset();
                    } else {
                        $('#form-messages').html('<p class="alert alert-warning">' + data.message + '</p>');
                    }
                })
                .fail(function(data){
                    $('#form-messages').html('<p class="alert alert-warning">' + data.message + '</p>');
                });
        });

        const locales = <?php echo $availablelangs; ?>;
        let selectedLang = "<?php echo $selected_lang; ?>";
        function getFlagSrc(countryCode) {
            return /^[A-Z]{2}$/.test(countryCode)
                ? `https://flagsapi.com/${countryCode.toUpperCase()}/shiny/64.png`
                : "";
        }
        const dropdownBtn = document.getElementById("dropdown-btn");
        const dropdownContent = document.getElementById("dropdown-content");
        function setSelectedLocale(locale) {
            const intlLocale = new Intl.Locale(locale);
            const langName = new Intl.DisplayNames([locale], {
                type: "language"
            }).of(intlLocale.language);

            dropdownContent.innerHTML = "";

            const otherLocales = locales.filter((loc) => loc !== locale);
            otherLocales.forEach((otherLocale) => {
                const otherIntlLocale = new Intl.Locale(otherLocale);
                const otherLangName = new Intl.DisplayNames([otherLocale], {
                    type: "language"
                }).of(otherIntlLocale.language);

                const listEl = document.createElement("li");
                listEl.innerHTML = `${otherLangName.toUpperCase()}<img src="${getFlagSrc(
                    otherIntlLocale.region
                )}" class="flag-icon" />`;
                listEl.value = otherLocale;
                listEl.addEventListener("mousedown", function () {
                    const form = document.createElement("form");
                    form.method = "POST";
                    form.action = "";
                    const input = document.createElement("input");
                    input.type = "hidden";
                    input.name = "lang";
                    input.value = otherLocale;
                    form.appendChild(input);
                    document.body.appendChild(form);
                    form.submit();
                });
                dropdownContent.appendChild(listEl);
            });

            dropdownBtn.innerHTML = `<img src="${getFlagSrc(
                intlLocale.region
            )}" class="flag-icon" />${langName.toUpperCase()}<span class="arrow-down"></span>`;
        }
        setSelectedLocale(selectedLang);



    });

    //const locales = ["en-GB","ar-SA","zh-CN","de-DE","es-ES","fr-FR","hi-IN","it-IT","in-ID","ja-JP","ko-KR","nl-NL","no-NO","pl-PL","pt-BR","sv-SE","fi-FI","th-TH","tr-TR","uk-UA","vi-VN","ru-RU","he-IL"];


</script>