package connekt.ernest;

import android.app.Activity;
import android.content.Context;
import android.content.Intent;
import android.content.SharedPreferences;
import android.os.Bundle;
import android.text.Html;
import android.view.View;
import android.widget.Button;
import android.widget.CheckBox;
import android.widget.EditText;
import android.widget.TextView;
import android.widget.Toast;

public class MainActivity extends Activity {
	
	EditText username , password ; 
	Button login,reset ;
	CheckBox remember;
	SharedPreferences preferences ;
	String PREFS_NAME = "com.example.sp.LoginPrefs";

	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.activity_main1);
	
		
		username = (EditText)findViewById(R.id.editText1);
		password = (EditText)findViewById(R.id.editText2);
		login = (Button)findViewById(R.id.button1);
		remember = (CheckBox)findViewById(R.id.checkBox1);
		
		
		preferences = getSharedPreferences(PREFS_NAME, Context.MODE_PRIVATE);
		if (preferences.getString("logged", "").toString().equals("logged")) 
		{
			
					Intent i = new Intent(MainActivity.this,MainMenu.class);
					i.putExtra("USERNAME",preferences.getString("username", "").toString());
					i.putExtra("PASSWORD",preferences.getString("password", "").toString());
					i.putExtra("CHECK", true);
					startActivity(i);
		        
			
		}
		
		login.setOnClickListener(new View.OnClickListener() {
			
			public void onClick(View arg0) {
				// TODO Auto-generated method stub
				 if(password.length() < 9){
					 password.setError(Html.fromHtml("<font color='red'>Complete POS Number!</font>"));
			        }
			        else{
				
				
						if(!username.getText().toString().equals("") &&  (!password.getText().equals("")))
						{
							if(remember.isChecked())
							{
								SharedPreferences.Editor editor = preferences.edit();
								editor.putString("username", username.getText().toString());
								editor.putString("password", password.getText().toString());
								editor.putString("logged", "logged");
								editor.commit();
							}
							Intent i = new Intent(MainActivity.this,MainMenu.class);
							i.putExtra("USERNAME", username.getText().toString());
							i.putExtra("PASSWORD", password.getText().toString());
							i.putExtra("CHECK", remember.isChecked());
							startActivity(i);	
							
						}
						else
						{
							Toast.makeText(MainActivity.this,"Please fill both fields.", Toast.LENGTH_SHORT).show();
						}
			        }
				
			}
		});
	
	}
	


}
