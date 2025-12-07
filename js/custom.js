'use strict';

document.addEventListener('DOMContentLoaded', () => {
    // Код для задания 1
    const paragraphElem = document.querySelector('.__toggled-paragraph'),
          firstBtnElem = document.querySelector('.__first-btn'),
          secondBtnElem = document.querySelector('.__second-btn');

    const paragraphHiddenClass = paragraphElem?.getAttribute('data-hidden-class');

    let isFirstBtnClicked = false;

    firstBtnElem?.addEventListener('click', () => isFirstBtnClicked = true);

    secondBtnElem?.addEventListener('click', () => {
        if (!paragraphElem || !paragraphHiddenClass || !isFirstBtnClicked) {
            return;
        }

        if (paragraphElem.classList.contains(paragraphHiddenClass)) {
            paragraphElem.classList.remove(paragraphHiddenClass);
        } else {
            paragraphElem.classList.add(paragraphHiddenClass);
        }

        isFirstBtnClicked = false;
    });

    // Код для задания 2
    const validationForm = document.querySelector('.__validation-form');

    const validationFormAction = validationForm?.getAttribute('action');

    validationForm?.addEventListener('submit', async (event) => {
        event.preventDefault();

        const formData = new FormData(validationForm),
              jsonData = Object.fromEntries(formData.entries());

        try {
            const response = await fetch(validationFormAction, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(jsonData),
            });

            const result = await response.json();

            if (result.hasOwnProperty('error')) {
                alert(result.error.message);
                return;
            }

            if(result.data) {
                alert('Строка является корректным PHP-кодом');
            } else {
                alert('Строка НЕ является корректным PHP-кодом');
            }
        } catch(err) {
            alert(err);
        }
    });
});