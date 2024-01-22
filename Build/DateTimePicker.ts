/*
....................
....................
 */

import flatpickr = require('flatpickr/flatpickr.min');
import ShortcutButtonsPlugin = require('flatpickr/plugins/shortcut-buttons.min'); // COPY THIS LINE
import DocumentService = require('TYPO3/CMS/Core/DocumentService');
import moment = require('moment');
import PersistentStorage = require('./Storage/Persistent');
import ThrottleEvent = require('TYPO3/CMS/Core/Event/ThrottleEvent');

/*
....................
....................
 */

/**
 * Initialize a single field
 *
 * @param {HTMLInputElement} inputElement
 */
private getDateOptions(inputElement: HTMLInputElement): { [key: string]: any } {

    const options = {
        /*
        ....................
        ....................
         */

        // COPY THIS PART - START
        plugins: [
            ShortcutButtonsPlugin({
                theme: 'dark',
                button: [
                    {
                        label: top.TYPO3.lang['labels.datepicker.today'] || 'Today'
                    },
                ],
                onClick: (index: number, fp: any) => {
                    fp.setDate(new Date(), true);
                }
            })
        ],
        // COPY THIS PART - END

        /*
        ....................
        ....................
         */
    };

    /*
    ....................
    ....................
     */
}

/*
....................
....................
 */