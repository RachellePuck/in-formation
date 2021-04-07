import $ from "jquery";
import Calendar from 'tui-calendar'; /* ES6 */
import "tui-calendar/dist/tui-calendar.css";
// If you use the default popups, use this.
import 'tui-date-picker/dist/tui-date-picker.css';
import 'tui-time-picker/dist/tui-time-picker.css';

var calendar = new Calendar('#calendar', {
  defaultView: 'week',
  taskView: false,
  disableClick: true,
  scheduleView: ['time'],
  isReadOnly: true,
  calendars: [
    {
        id: '1',
        name: 'My Calendar',
        color: '#ffffff',
        bgColor: '#9e5fff',
        dragBgColor: '#9e5fff',
        borderColor: '#9e5fff'
      },
  ]
});

shifts.forEach(element => {
    calendar.createSchedules([
        {
            title: element.department,
            calendarId: '1',
            category: 'time',
            start: element.start_time,
            end: element.end_time,
        },
    ]);
});


calendar.on({
    'clickSchedule': function(e) {
        console.log('clickSchedule', e);
    },
});