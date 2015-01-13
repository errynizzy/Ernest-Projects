package ernest.city.survicor;

import android.content.BroadcastReceiver;
import android.content.Context;
import android.content.Intent;

public class OlympicsReceiver extends BroadcastReceiver
{

    @Override
    public void onReceive(Context context, Intent intent) 
    {
        if(intent.getAction() != null && intent.getAction().equals(Intent.ACTION_BOOT_COMPLETED)) 
        {  
           Intent pushIntent = new Intent(context, FirstClass.class);  
           pushIntent.setFlags(Intent.FLAG_ACTIVITY_NEW_TASK);

           context.startActivity(pushIntent);  
        } 
    }
}