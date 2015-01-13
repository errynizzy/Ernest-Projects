package ernest.city.survicor;

import java.util.Calendar;

import android.app.Notification;
import android.app.NotificationManager;
import android.app.PendingIntent;
import android.app.Service;
import android.content.Intent;
import android.os.IBinder;
public class ServiceTemplate extends Service {
	Calendar c = Calendar.getInstance(); 
	int hour = c.get(Calendar.HOUR);
	
    private static final int NOTIF_ID = 1234;
	
	
@Override
		public IBinder onBind(Intent intent) {
		return null;
		}
		
@Override
		public void onCreate() {
		//code to execute when the service is first created
	
	//for 12hrs and 24hrs cheza na time plass which activity to open using if ....else if kama kawa kazi na dawa
    if(hour == 1 || hour == 2 || hour == 3 || hour == 4 || hour == 5 || hour == 6 || hour == 7 || hour == 8 || hour == 9 || hour == 10 || hour == 11 || hour == 12){
    	
    	 // NOTIFICATIONS
        NotificationManager notifManager = (NotificationManager) getSystemService(NOTIFICATION_SERVICE);
        Notification note = new Notification(R.drawable.icon_cs, "New Surviving Skills", System.currentTimeMillis());

        PendingIntent intent = PendingIntent.getActivity(this, 0, new Intent(this, Select.class), 0);

        note.setLatestEventInfo(this, "New City Survivor", "Get City Skills", intent);
        
        notifManager.notify(NOTIF_ID, note);
    	
    	
    }
		}


@Override
		public void onDestroy() {
		//code to execute when the service is shutting down
	//for 12hrs and 24hrs
    if(hour == 1 || hour == 2 || hour == 3 || hour == 4 || hour == 5 || hour == 6 || hour == 7 || hour == 8 || hour == 9 || hour == 10 || hour == 11 || hour == 12){
    	
    	 // NOTIFICATIONS
        NotificationManager notifManager = (NotificationManager) getSystemService(NOTIFICATION_SERVICE);
        Notification note = new Notification(R.drawable.icon_cs, "New Surviving Skills", System.currentTimeMillis());

        PendingIntent intent = PendingIntent.getActivity(this, 0, new Intent(this, Select.class), 0);

        note.setLatestEventInfo(this, "New City Survivor", "Get City Skills", intent);
        
        notifManager.notify(NOTIF_ID, note);
    	
    	
    }
	
		}


@Override
		public void onStart(Intent intent1, int startid) {
		//code to execute when the service is starting up
	//for 12hrs and 24hrs
    if(hour == 1 || hour == 2 || hour == 3 || hour == 4 || hour == 5 || hour == 6 || hour == 7 || hour == 8 || hour == 9 || hour == 10 || hour == 11 || hour == 12){
    	
    	 // NOTIFICATIONS
        NotificationManager notifManager = (NotificationManager) getSystemService(NOTIFICATION_SERVICE);
        Notification note = new Notification(R.drawable.icon_cs, "New Surviving Skills", System.currentTimeMillis());

        PendingIntent intent = PendingIntent.getActivity(this, 0, new Intent(this, Select.class), 0);

        note.setLatestEventInfo(this, "New City Survivor", "Get City Skills", intent);
        
        notifManager.notify(NOTIF_ID, note);
    	
    	
    }
	
		}



}