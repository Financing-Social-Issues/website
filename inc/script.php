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
                name: '<?php echo translate('Moradia'); ?>',
                y: 27,
                z: 1000000
            }, {
                name: '<?php echo translate('Saúde'); ?>',
                y: 21,
                z: 900000
            }, {
                name: '<?php echo translate('Desigualdade Racial'); ?>',
                y: 11,
                z: 400000
            }, {
                name: '<?php echo translate('Projeto'); ?>',
                y: 10,
                z: 350000
            }, {
                name: '<?php echo translate('Desigualdade Social'); ?>',
                y: 8,
                z: 300000
            }, {
                name: '<?php echo translate('Pós COVID'); ?>',
                y: 7,
                z: 280000
            }, {
                name: '<?php echo translate('Desenvolvimento'); ?>',
                y: 7,
                z: 270000
            }, {
                name: '<?php echo translate('Saneamento Básico'); ?>',
                y: 5,
                z: 200000
            }, {
                name: '<?php echo translate('Desemprego'); ?>',
                y: 4,

                z: 150000
            }, {
                name: '<?php echo translate('Necessidades'); ?>',
                y: 4,
                z: 150000
            }
            ],
            colors: [
                '#FF5733',  // Strong Red-Orange
                '#FF8D1A',  // Vivid Orange
                '#FFC300',  // Bright Yellow
                '#C70039',  // Vivid Red
                '#900C3F',  // Strong Pink
                '#DAF7A6',  // Bright Lime Green
                '#FF33FF',  // Vivid Magenta
                '#33FF57',  // Vivid Green
                '#33C3FF',  // Bright Sky Blue
                '#FF33A8'   // Bright Pink
            ]

        }]
    });

</script>
<script>
    $(document).ready(function(){
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
                )}" class="flag-icon" alt='Language' />`;
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

</script>