package ernest.farming.instructor;

import java.util.Calendar;



import android.app.Activity;
import android.app.AlertDialog;
import android.app.DatePickerDialog;
import android.app.Dialog;
import android.content.DialogInterface;
import android.content.Intent;
import android.database.Cursor;
import android.os.Bundle;
import android.view.View;
import android.view.ViewGroup.LayoutParams;
import android.widget.AdapterView;
import android.widget.Button;
import android.widget.DatePicker;
import android.widget.EditText;
import android.widget.ImageButton;
import android.widget.LinearLayout;
import android.widget.ListView;
import android.widget.SimpleCursorAdapter;
import android.widget.TextView;
import android.widget.Toast;

public class MySQLiteDB extends Activity {
	
	EditText displayDate, inputContent2;
	Button buttonAdd, buttonDeleteAll, buttonHome;
	Button buttonSortDefault, buttonSort1;
	ImageButton pickDate;
	
	int pYear;
    int pMonth;
    int pDay;
	
	private SQLiteAdapter mySQLiteAdapter;
	ListView listContent;
	
	SimpleCursorAdapter cursorAdapter;
	Cursor cursor;
	
	
	 /** This integer will uniquely define the dialog to be used for displaying date picker.*/
    static final int DATE_DIALOG_ID = 0;
     
    /** Callback received when the user "picks" a date in the dialog */
    private DatePickerDialog.OnDateSetListener pDateSetListener =
            new DatePickerDialog.OnDateSetListener() {
 
                public void onDateSet(DatePicker view, int year ,
                                      int monthOfYear, int dayOfMonth) {
                    pYear = year;
                    pMonth = monthOfYear;
                    pDay = dayOfMonth;
                    updateDisplay();
                    displayToast();
                }
            };
     
    /** Updates the date in the TextView */
    private void updateDisplay() {
        displayDate.setText(
            new StringBuilder()
                    // Month is 0 based so add 1
                    .append(pMonth + 1).append("/")
                    .append(pDay).append("/")
                    .append(pYear).append(" "));
    }
     
    /** Displays a notification when the date is updated */
    private void displayToast() {
        Toast.makeText(this, new StringBuilder().append("Date choosen is ").append(displayDate.getText()),  Toast.LENGTH_SHORT).show();
             
    }


	 @Override
 	public void onBackPressed() {
 	    AlertDialog.Builder builder = new AlertDialog.Builder(this);
 	    builder.setMessage("What do you want to do?")
 	           .setCancelable(false)
 	           .setPositiveButton("Go Back", new DialogInterface.OnClickListener() {
 	               public void onClick(DialogInterface dialog, int id) {
 	            	  Intent i = new Intent(getApplicationContext(),
 								MainActivity.class);
 						startActivity(i);
 						finish();
 	               }
 	           })
 	           .setNegativeButton("Cancel", new DialogInterface.OnClickListener() {
           public void onClick(DialogInterface dialog, int id) {
                dialog.cancel();
           }
       });
 	    AlertDialog alert = builder.create();
 	    alert.show();

 	}
	
	
	
    /** Called when the activity is first created. */
    @Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.sqlitemain);
        
       // inputContent1 = (EditText)findViewById(R.id.contentDate);
        inputContent2 = (EditText)findViewById(R.id.content2);
        buttonAdd = (Button)findViewById(R.id.add);
        buttonDeleteAll = (Button)findViewById(R.id.deleteall);
        buttonHome = (Button) findViewById(R.id.buttonHome);
        listContent = (ListView)findViewById(R.id.contentlist);
        displayDate = (EditText) findViewById(R.id.displayDate); 
        pickDate = (ImageButton) findViewById(R.id.pickDate);
        
        
        //assigning button click events in order
        /** Listener for click event of the button */
        pickDate.setOnClickListener(new View.OnClickListener() {
            public void onClick(View v) {
                showDialog(DATE_DIALOG_ID);
            }
        });
        
        //buttons actions
        
        buttonHome.setOnClickListener(new View.OnClickListener() {
        	public void onClick(View view) {
        		Intent i = new Intent(getApplicationContext(),
						MainActivity.class);
				startActivity(i);
				finish();
			} 
		});
        
        /** Get the current date */
        final Calendar cal = Calendar.getInstance();
        pYear = cal.get(Calendar.YEAR);
        pMonth = cal.get(Calendar.MONTH);
        pDay = cal.get(Calendar.DAY_OF_MONTH);
 
        /** Display the current date in the TextView */
        updateDisplay();

        mySQLiteAdapter = new SQLiteAdapter(this);
        mySQLiteAdapter.openToWrite();

        cursor = mySQLiteAdapter.queueAll();
        String[] from = new String[]{SQLiteAdapter.KEY_ID, SQLiteAdapter.KEY_CONTENT1, SQLiteAdapter.KEY_CONTENT2};
        int[] to = new int[]{R.id.id, R.id.text1, R.id.text2};
        cursorAdapter =
        	new SimpleCursorAdapter(this, R.layout.row, cursor, from, to);
        listContent.setAdapter(cursorAdapter);
        listContent.setOnItemClickListener(listContentOnItemClickListener);
        
        buttonAdd.setOnClickListener(buttonAddOnClickListener);
        buttonDeleteAll.setOnClickListener(buttonDeleteAllOnClickListener);
        
        buttonSortDefault = (Button)findViewById(R.id.sortbyDefault);
        buttonSort1 =  (Button)findViewById(R.id.sortby1);
        
        buttonSortDefault.setOnClickListener(new Button.OnClickListener(){

			public void onClick(View arg0) {
				// TODO Auto-generated method stub
				cursor = mySQLiteAdapter.queueAll();
				String[] from = new String[]{SQLiteAdapter.KEY_ID, SQLiteAdapter.KEY_CONTENT1, SQLiteAdapter.KEY_CONTENT2};
		        int[] to = new int[]{R.id.id, R.id.text1, R.id.text2};
		        cursorAdapter =
		        	new SimpleCursorAdapter(MySQLiteDB.this, R.layout.row, cursor, from, to);
		        listContent.setAdapter(cursorAdapter);
				updateList();
			}});
        
        buttonSort1.setOnClickListener(new Button.OnClickListener(){

			public void onClick(View arg0) {
				// TODO Auto-generated method stub
				cursor = mySQLiteAdapter.queueAll_SortBy_CONTENT1();
				String[] from = new String[]{SQLiteAdapter.KEY_ID, SQLiteAdapter.KEY_CONTENT1, SQLiteAdapter.KEY_CONTENT2};
		        int[] to = new int[]{R.id.id, R.id.text1, R.id.text2};
		        cursorAdapter =
		        	new SimpleCursorAdapter(MySQLiteDB.this, R.layout.row, cursor, from, to);
		        listContent.setAdapter(cursorAdapter);
				updateList();
			}});
        
        
    }
    
    Button.OnClickListener buttonAddOnClickListener
    = new Button.OnClickListener(){

		public void onClick(View arg0) {
			// TODO Auto-generated method stub
			String data1 = displayDate.getText().toString();
			String data2 = inputContent2.getText().toString();
			mySQLiteAdapter.insert(data1, data2);
			updateList();
			
			//clear inputs
			Intent i = new Intent(getApplicationContext(),
					MySQLiteDB.class);
			startActivity(i);
			finish();
		}
    	
    };
    
    Button.OnClickListener buttonDeleteAllOnClickListener
    = new Button.OnClickListener(){

		public void onClick(View arg0) {
			// TODO Auto-generated method stub
			mySQLiteAdapter.deleteAll();
			updateList();
		}
    	
    };
    
    
    private ListView.OnItemClickListener listContentOnItemClickListener
    = new ListView.OnItemClickListener(){

		public void onItemClick(AdapterView<?> parent, View view, int position,
				long id) {
			// TODO Auto-generated method stub
			
			Cursor cursor = (Cursor) parent.getItemAtPosition(position);
			final int item_id = cursor.getInt(cursor.getColumnIndex(SQLiteAdapter.KEY_ID));
            String item_content1 = cursor.getString(cursor.getColumnIndex(SQLiteAdapter.KEY_CONTENT1));
            String item_content2 = cursor.getString(cursor.getColumnIndex(SQLiteAdapter.KEY_CONTENT2));
            
            AlertDialog.Builder myDialog 
            = new AlertDialog.Builder(MySQLiteDB.this);
            
            myDialog.setTitle("Delete/Edit?");
            
            TextView dialogTxt_id = new TextView(MySQLiteDB.this);
            LayoutParams dialogTxt_idLayoutParams 
             = new LayoutParams(LayoutParams.WRAP_CONTENT, LayoutParams.WRAP_CONTENT);
            dialogTxt_id.setLayoutParams(dialogTxt_idLayoutParams);
            dialogTxt_id.setText("#" + String.valueOf(item_id));
            
            final EditText dialogC1_id = new EditText(MySQLiteDB.this);
            LayoutParams dialogC1_idLayoutParams 
             = new LayoutParams(LayoutParams.FILL_PARENT, LayoutParams.WRAP_CONTENT);
            dialogC1_id.setLayoutParams(dialogC1_idLayoutParams);
            dialogC1_id.setText(item_content1);
            
            final EditText dialogC2_id = new EditText(MySQLiteDB.this);
            LayoutParams dialogC2_idLayoutParams 
             = new LayoutParams(LayoutParams.FILL_PARENT, LayoutParams.WRAP_CONTENT);
            dialogC2_id.setLayoutParams(dialogC2_idLayoutParams);
            dialogC2_id.setText(item_content2);
            
            LinearLayout layout = new LinearLayout(MySQLiteDB.this);
            layout.setOrientation(LinearLayout.VERTICAL);
            layout.addView(dialogTxt_id);
            layout.addView(dialogC1_id);
            layout.addView(dialogC2_id);
            myDialog.setView(layout);
            
            myDialog.setPositiveButton("Delete", new DialogInterface.OnClickListener() {
                // do something when the button is clicked
                public void onClick(DialogInterface arg0, int arg1) {
                	mySQLiteAdapter.delete_byID(item_id);
        			updateList();
                 }
                });
            
            myDialog.setNeutralButton("Update", new DialogInterface.OnClickListener() {
                // do something when the button is clicked
                public void onClick(DialogInterface arg0, int arg1) {
                	String value1 = dialogC1_id.getText().toString();
                	String value2 = dialogC2_id.getText().toString();
                	mySQLiteAdapter.update_byID(item_id, value1, value2);
        			updateList();
                 }
                });
            
            myDialog.setNegativeButton("Cancel", new DialogInterface.OnClickListener() {
                // do something when the button is clicked
                public void onClick(DialogInterface arg0, int arg1) {
         
                 }
                });
            
            myDialog.show();
            
            
		}};

	@Override
	protected void onDestroy() {
		// TODO Auto-generated method stub
		super.onDestroy();
		mySQLiteAdapter.close();
	}



	private void updateList(){
		cursor.requery();
    }
	
	  /** Create a new dialog for date picker */
    @Override
    protected Dialog onCreateDialog(int id) {
        switch (id) {
        case DATE_DIALOG_ID:
            return new DatePickerDialog(this,
                        pDateSetListener,
                        pYear, pMonth, pDay);
        }
        return null;
        
        
    }

}
