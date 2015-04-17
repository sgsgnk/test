using System;
public class Hello{
    public static void Main(){
        // 自分の得意な言語で
        // Let's チャレンジ！！
        var n = System.Console.ReadLine();
        int r = int.Parse(n);
        
        int counter;
        double point = 0;
        
        double p = 0;
        double total = 0;
        
        for(counter=0; counter<r; counter++)
        {
            var dataVar = System.Console.ReadLine();
            string[] dataStr = dataVar.Split(new char[]{' '});
            double price = double.Parse(dataStr[1]);
            
            if(0 <= dataStr[0].IndexOf("3"))
            {
                point = price * 0.03;
            }
            else if(0 <= dataStr[0].IndexOf("5"))
            {
                point = price * 0.05;
            }
            else
            {
                point = price * 0.01;
            }
            p = Math.Floor(point);
            total += p;
        }
        
        System.Console.WriteLine(total);
    }
}

//全パスできました