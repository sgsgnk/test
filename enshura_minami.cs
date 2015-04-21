using System;
public class Hello{
    public static void Main(){
        // 自分の得意な言語で
        // Let's チャレンジ！！
        var size = System.Console.ReadLine();
        string [] sizeStr = size.Split(new char [] {' '});
        int x = int.Parse(sizeStr[0]);
        int y = int.Parse(sizeStr[1]);
        int [] bomb = new int [x];
        string [] stage = new string[x];
        int counterX;
        int counterY;
        
        for(counterY=0; counterY<y; counterY++)
        {
            var code = System.Console.ReadLine();
            string exp = code.Replace("2", "0");
            stage = exp.Split(new char [] {' '});
            
            for(counterX=0; counterX<x; counterX++)
            {
                if(stage[counterX] == "1")
                {
                    bomb[counterX] += 1;
                }
            }
        }
        for(counterY=0; counterY<y; counterY++)
        {
            for(counterX=0; counterX<x; counterX++)
            {
                if(counterX!=0)
                    {
                        System.Console.Write(" ");
                    }
                
                if(y-bomb[counterX] > counterY)
                {
                    System.Console.Write("0");
                }
                else
                {
                    System.Console.Write("1");
                }
            }
            System.Console.WriteLine("");
        }
    }
}

//クリアできました