import javax.swing.*;

import apple.laf.JRSUIConstants.Size;

import java.awt.*;

class test {

    public static void main(String[] args) {
        JFrame frame = new JFrame();

        frame.setSize(500, 500);
        frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        frame.setLayout(new FlowLayout());

        frame.setBackground(Color.RED);
        frame.getContentPane().setBackground(Color.PINK);

        frame.setTitle("Aitsada");
        frame.setIconImage(Toolkit.getDefaultToolkit().getImage("ait.png"));

        // label
        JLabel label = new JLabel("Enter your name : ");

        // text field
        JTextField textFeild = new JTextField(25);

        // btn
        JButton btn = new JButton("OK");

        // add component on frame
        frame.add(label);
        frame.add(textFeild);
        frame.add(btn);

        frame.setVisible(true);
    }
}