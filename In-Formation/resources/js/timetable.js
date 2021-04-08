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
  week: {
    hourStart: 7,
    hourEnd: 23,
    startDayOfWeek: 1 // monday
  },
  theme: {
    'week.timegridOneHour.height': '36px',
    'week.timegridHalfHour.height': '18px',
  },
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
      id: element.id,
      start: element.start_time,
      end: element.end_time,
    },
  ]);
});


calendar.on('clickSchedule', function(e) {
  window.location.href = route('shift.trade', { shift: e.schedule.id });
});